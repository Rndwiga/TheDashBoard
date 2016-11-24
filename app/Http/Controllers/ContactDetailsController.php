<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Inventory;
use App\UserProfile;
use App\Contact;
use Datatables;

class ContactDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {   //Link Items
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              //Inventory Items
              $contacts = Contact::all();
            //  $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
              $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'contacts'=> 'contacts');
              return view('contacts.index', compact( 'user', 'css', 'contacts'));
          }else {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $contacts = Contact::all();
          //  $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
            $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'contacts'=> 'contacts');
              return view('contacts.index', compact( 'user', 'css', 'contacts'));
          }
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
    //  return $request;
        $this->validate($request, [
              'contact_picture' => 'required',
              'name' => 'max:255',
              'mobile' => 'max:255',
              'address' => 'max:255',
              'profession' => 'max:255',
          ]);
              $file = $request->file('contact_picture');
              $contactId = strtoupper(str_random(10));
              $imageName = $contactId . '.' . $file->getClientOriginalExtension();
              $path = 'assets/images/contactPictures/' . $imageName; //file path
              if (file_exists(public_path($path)))
                    {
                        unlink(public_path($path)); //delete the file if it exists and replace with new one
                        $file->move(base_path() . '/public/assets/images/contactPictures/', $imageName);
                    }else{
                        $file->move(base_path() . '/public/assets/images/contactPictures/', $imageName);
                    }

          $contact = new Contact;
          $contact->contactId = $contactId;
          $contact->contact_picture = $path;
          $contact->name = $request->get('name');
          $contact->mobile = $request->get('mobile');
          $contact->address = $request->get('address');
          $contact->profession = $request->get('profession');
        //  return $contact;
          $contact->save();
        return redirect('/ContactDetails/');
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
      $user = User::with(['userProfile'])->find(Auth::user()->id);
      $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
        if($isProfileSet == NULL)
        {   //Link Items
            $user = User::find(Auth::user()->id); //fetching basic user info
            $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
            //Inventory Items
            $contacts = Contact::all();
            $sContact = Contact::find($id);
          //  $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
            $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'contacts'=> 'contacts');
            return view('contacts.edit', compact( 'user', 'css', 'contacts', 'sContact'));
        }else {
          $user = User::find(Auth::user()->id); //fetching basic user info
          $contacts = Contact::all();
          $sContact = Contact::find($id);
        //  $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
          $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'contacts'=> 'contacts');
        //  return $sContact;
            return view('contacts.edit', compact( 'user', 'css', 'contacts', 'sContact'));
        }
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

          $this->validate($request, [
                'name' => 'max:255',
                'mobile' => 'max:255',
                'address' => 'max:255',
                'profession' => 'max:255',
            ]);

          $contact = Contact::find($id); //fetch the contact
                if(!empty($request->file('contact_picture')))
                {
                      $file = $request->file('contact_picture');
                      $contactId = $request->get('contactId');
                      $imageName = $contactId . '.' . $file->getClientOriginalExtension();
                      $path = 'assets/images/contactPictures/' . $imageName; //file path

                      if (file_exists(public_path($path)))
                            {
                                unlink(public_path($path)); //delete the file if it exists and replace with new one
                                $file->move(base_path() . '/public/assets/images/contactPictures/', $imageName);
                            }else{
                                $file->move(base_path() . '/public/assets/images/contactPictures/', $imageName);
                            }
                  $contact->contact_picture = $path; //set the new path
                }
            $contact->contactId = $request->get('contactId');
            $contact->name = $request->get('name');
            $contact->mobile = $request->get('mobile');
            $contact->address = $request->get('address');
            $contact->profession = $request->get('profession');

            $contact->save();
          return redirect('/ContactDetails/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //return $id;
      $contact = Contact::findOrFail($id)->delete();
      return redirect('/ContactDetails/');
    }
}
