<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketCategory;
use App\Ticket;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserProfile;
use App\Mailers\AppMailer;
use App;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  return 'texter';
      $user = User::with(['userProfile'])->find(Auth::user()->id);

        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              $categories = TicketCategory::all();
              return view('tickets.index', compact( 'user'));
          }else {
            $categories = TicketCategory::all();
            $user = User::find(Auth::user()->id); //fetching basic user info
            return view('tickets.index', compact( 'user', 'categories'));
          }
    }
    public function userTickets()
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
          if($user->userProfile == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              $categories = TicketCategory::all();
              $tickets = Ticket::where('user_id', Auth::user()->id);
              return view('tickets.index', compact( 'user', 'tickets', 'categories'));
          }else {
            $categories = TicketCategory::all();
            $user = User::find(Auth::user()->id); //fetching basic user info
            $tickets = Ticket::where('user_id', Auth::user()->id);
            return view('tickets.index', compact( 'user', 'categories'));
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              $categories = TicketCategory::all();
              return view('tickets.create', compact( 'user'));
          }else {
            $categories = TicketCategory::all();
            $user = User::find(Auth::user()->id); //fetching basic user info
            return view('tickets.create', compact( 'user', 'categories'));
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUserTicket(Request $request, AppMailer $mailer)
    {
      return 'here';
        $this->validate($request, [
          'title' => 'required',
          'category' => 'required',
          'priority' => 'required',
          'message' => 'required'
        ]);
        $ticket = new Ticket([
          'title' => $request->input('title'),
          'user_id' => Auth::user()->id,
          'ticket_id' => strtoupper(str_random(10)),
          'category_id' => $request->input('category'),
          'priority' => $request->input('priority'),
          'message' => $request->input('message'),
          'status' => $request->input('status'),
        ]);
        $ticket->save();

        $mailer->sendTicketInformation(Auth::user(), $ticket);
        return redirect()->back()->with('status', 'A ticket with ID: # $ticket->ticket_id has been opened' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
