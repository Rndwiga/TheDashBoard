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
    public function index()
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
            $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
              return view('inventory.index', compact( 'user', 'items'));
          }else {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
              return view('inventory.index', compact( 'user', 'items'));
          }
    }
    public function anyData()
    {

    //  $items = User::select(['id', 'asset_model', 'asset_location', 'created_at', 'updated_at']);
      $items = Inventory::select(['id', 'asset_serial', 'asset_tag', 'asset_user', 'asset_location'])->get();
      return Datatables::of($items)
            ->make(true);
    }

    public function show($id)
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              $item = Inventory::find($id);
              return view('inventory.show', compact( 'user', 'item'));
          }else {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $item = Inventory::find($id);
            //return $item;
              return view('inventory.show', compact( 'user', 'item'));
          }
    }
    public function edit($id)
    {
      $user = User::with(['userProfile'])->find(Auth::user()->id);
        $isProfileSet = $user->userProfile; //check if profile table is set if not load defaults
          if($isProfileSet == NULL)
          {
              $user = User::find(Auth::user()->id); //fetching basic user info
              $user->userProfile = (object)array('profile_picture' => asset('data/profile/avatar-2.png ')); //setting default user profile
              $item = Inventory::find($id);
              return view('inventory.edit', compact( 'user', 'item'));
          }else {
            $user = User::find(Auth::user()->id); //fetching basic user info
            $item = Inventory::find($id);
              return view('inventory.edit', compact( 'user', 'item'));
          }
    }
    public function updateItem(Request $request, $id)
    {
      return 'here here';

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
                    $item->save();
                return redirect('/users/'. $item->id .'/edit');
    }
    public function destroy($id)
    {
      $item = Inventory::find($id);
      return $item;
        return 'true';
    }
}
