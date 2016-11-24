<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Inventory;
use App\UserProfile;
use Datatables;

class InventoryController extends Controller
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
            $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
            $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
            return view('inventory.index', compact( 'user', 'items', 'css'));
        }else {
          $user = User::find(Auth::user()->id); //fetching basic user info
          $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
          $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
            return view('inventory.index', compact( 'user', 'items', 'css'));
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
            $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
            return view('inventory.create', compact('user', 'css'));
        }else {
          $user = User::find(Auth::user()->id); //fetching basic user info
          $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
          //return $item;
            return view('inventory.create', compact('user', 'css'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $this->validate($request, [
                'asset_type' => 'max:255',
                'asset_model' => 'max:255',
                'asset_serial' => 'max:255',
                'asset_tag' => 'max:255',
                'asset_location' => 'max:255',
                'asset_status' => 'max:255',
                'asset_user' => 'max:255',
                'contact_number' => 'max:255',
                'asset_notes' => 'max:255',
            ]);

            $item = new Inventory;
            $item->asset_type = $request->get('asset_type');
            $item->asset_model = $request->get('asset_model');
            $item->asset_serial = $request->get('asset_serial');
            $item->asset_tag = $request->get('asset_tag');
            $item->asset_location = $request->get('asset_location');
            $item->asset_status = $request->get('asset_status');
            $item->asset_user = $request->get('asset_status');
            $item->contact_number = $request->get('contact_number');
            $item->asset_notes = $request->get('asset_notes');
          //  return $item;
            $item->save();
          return redirect('/inventory/'. $item->id .'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
      $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
        if($isProfileSet == NULL)
        {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
            $item = Inventory::find($id);
            $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
            return view('inventory.show', compact( 'user', 'item', 'css'));
        }else {
          $user = User::find(Auth::user()->id); //fetching basic user info
          $item = Inventory::find($id);
          $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
          //return $item;
            return view('inventory.show', compact( 'user', 'item', 'css'));
        }
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
        {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
            $item = Inventory::find($id);
            $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
            return view('inventory.edit', compact( 'user', 'item', 'css'));
        }else {
          $user = User::find(Auth::user()->id); //fetching basic user info
          $item = Inventory::find($id);
          $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'inventory'=> 'inventory');
            return view('inventory.edit', compact( 'user', 'item', 'css'));
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
                      'asset_type' => 'max:255',
                      'asset_model' => 'max:255',
                      'asset_serial' => 'max:255',
                      'asset_tag' => 'max:255',
                      'asset_location' => 'max:255',
                      'asset_status' => 'max:255',
                      'asset_user' => 'max:255',
                      'contact_number' => 'max:255',
                      'asset_notes' => 'max:255',
                  ]);

                  $item = Inventory::find($request->get('id'));
                  $item->asset_type = $request->get('asset_type');
                  $item->asset_model = $request->get('asset_model');
                  $item->asset_serial = $request->get('asset_serial');
                  $item->asset_tag = $request->get('asset_tag');
                  $item->asset_location = $request->get('asset_location');
                  $item->asset_status = $request->get('asset_status');
                  $item->asset_user = $request->get('asset_status');
                  $item->contact_number = $request->get('contact_number');
                  $item->asset_notes = $request->get('asset_notes');
            //  return $item;
                  $item->save();
              return redirect('/inventory/'. $item->id .'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id . ' The id to delete';
        $item = Inventory::findOrFail($id)->delete();

    }
}
