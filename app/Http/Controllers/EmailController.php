<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use PhpImap\Mailbox as ImapMailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  return '<pre>' . $this->fetchMail() . '</pre>';
      $user = User::with(['userProfile'])->find(Auth::user()->id);
        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              $users = User::all();
              $emails = $this->fetchMail();
              //  echo "<br />";
              //  echo "<pre>";
              //   print_r($emails);
              //  echo "</pre>";
              //  exit;
              return view('emailApp.index', compact('user', 'users' ,'emails'));
          }else {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $users = User::all();
            $emails = $this->fetchMail();
              //  echo "<br />";
                //  echo "<pre>";
                //   print_r($emails);
              //  echo "</pre>";
              //  exit;
            return view('emailApp.index', compact('users', 'user', 'emails'));
          }
    }
    public function fetchMail()
    {
      //connecting to gmail.
      $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
      $username = 'raphael.williams.great@gmail.com';
      $password = 'login536';
      //opening connection
      $inbox = imap_open($hostname,$username,$password)or die(imap_last_error()) or die('Cannot connect to Mail: ' . imap_last_error());
                //Getting Headers only
            $headers = imap_headers($inbox);
            //echo "<pre>";
            // print_r($headers);
            //echo "</pre>";
          //  exit;

      /* grab emails */
      $emails = imap_search($inbox,'ALL');
            /* put the newest emails on top */
            rsort($emails);
                foreach ($emails as $emailNumber) {
                  $overview = imap_fetch_overview($inbox,$emailNumber,0);
                            //checking if from has the name of the sender, if it does, use that
                        if(strpos($overview[0]->from, '<') !== false)
                          {
                            $nameEmail =  $overview[0]->from;
                          }else
                          {
                            $nameEmail = $overview[0]->from; //email from
                          }
                  $emailSummary[] = array(
                        'emailStatus' => $overview[0]->seen ? 'read' : 'unread' ,
                      //  'from' => $overview[0]->from ,
                        'from' => $nameEmail ,
                        'subject' => $overview[0]->subject , //email subject
                      //  'sentOnNw' => $overview[0]->date , //date when sent e.g 14 Oct 2016 12:32:38 -0400
                        'sentOn' => date("M.j.Y g:i a", strtotime($overview[0]->date)), //formatted time e.g "M.j.Y g:i a" Nov.20.2016 10:10 am
                        'sentTo' => $overview[0]->to , //email to who
                        'emailSize' => $overview[0]->size , //email size
                        'messageNo' => $overview[0]->msgno ,
                        'isRecent' => $overview[0]->recent , //not sure
                        'isFlagged' => $overview[0]->flagged , //boolean 1 or 0
                        'isAnswered' => $overview[0]->answered , //boolean 1 or 0
                        'isDeleted' => $overview[0]->deleted , //boolean 1 or 0
                        'isDraft' => $overview[0]->draft , //boolean 1 or 0
                        'isUdate' => $overview[0]->udate , //boolean 1 or 0
                        'isUID' => $overview[0]->uid ,
                  );

                //  return (object)$emailSummary;
              //  echo "<br />";
              //  echo "<pre>";
              //   print_r($overview);
              //  echo "</pre>";
                }
                return (object)$emailSummary;
            exit;

      /* if emails are returned, cycle through each... */
      if($emails) {

                  	/* begin output var */
                  	$output = '';

                  	/* put the newest emails on top */
                  	rsort($emails);

                  	/* for every email... */
                  	foreach($emails as $email_number) {

                  		/* get information specific to this email */
                  		$overview = imap_fetch_overview($inbox,$email_number,0);
                  		$message = imap_fetchbody($inbox,$email_number,2);

                  		/* output the email header information */
                  		$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
                  		$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
                  		$output.= '<span class="from">'.$overview[0]->from.'</span>';
                  		$output.= '<span class="date">on '.$overview[0]->date.'</span>';
                  		$output.= '</div>';

                  		/* output the email body */
                  		$output.= '<div class="body">'.$message.'</div>';
                  	}

                  	return $output;
                }

    /* close the connection */
    imap_close($inbox);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email_id)
    {
        $email = $this->getSingleMail($email_id);
        /*
           echo "<br />";
          echo $email->date;
           echo "<br />";
          echo $email->fromName;
           echo "<br />";
          echo $email->fromAddress;
           echo "<br />";
           echo "<pre>";
            print_r($email->textHtml);
          echo "<br />";
            print_r($email->headers);
          echo "<br />";
            print_r($email);
           echo "</pre>";
           exit;
           */
        return view('emailApp.view', compact('email'));
    }
    private function emailDetails()
    {
      /*
          This function sets the connection details to be used for pulling emails
      */
          $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
          $username = 'raphael.williams.great@gmail.com';
          $password = 'login536';
          $attachDir = base_path() . '/public/assets/emailAttachment/';
          $mailboxConnection = new ImapMailbox ($hostname, $username, $password, $attachDir); //new instance of mailbox
      return $mailboxConnection;
    }
    public function getSingleMail($email_id)
    {
      /*
        *This function fetches a single email from the inbox.
      */
          $mailbox = $this->emailDetails(); //inbox connection
          $email = $mailbox->getMail($email_id, 0);
            $mailbox->markMailAsRead($email_id); //mark email as read

          return $email;
          /*
          if(($email->textPlain == NULL) && ($email->textHtml != NULL))
            {
              return $email->textHtml; //return only the html if the textPlain is not set
            }elseif (($email->textPlain != NULL) && ($email->textHtml != NULL)) {
              return $email->textHtml; //return the html if both the textPlain and textHtml is set
            }else {
              return $email->textPlain;
            }
            */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
