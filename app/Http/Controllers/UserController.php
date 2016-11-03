<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserProfile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       //ensuring that the user is logged in
         $this->middleware('auth');
     }
    public function index()
    {
          // $users = User::with('roles')->get();
          $users = User::all();
          return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::with(['userProfile'])->find(Auth::user()->id);
        return view('users.create')->with('user', $user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    public function createUser(Request $request)
    {
              if($request->get('section') == "basicInfo") {

                     $this->validate($request, [
                        'name' => 'required|max:255',
                        'email' => 'required|email|max:255|unique:users',
                        'gender' => 'required',
                        'password' => 'required|min:6|confirmed',
                    ]);
                    $user = new User(array(
                        'name' => $request->get('name'),
                        'email' => $request->get('email'),
                        'gender' => $request->get('gender'),
                        'password' =>  bcrypt($request->get('content'))
                    ));
                    $user->save();
                    $insertedId = $user->id;
                return redirect('/users/'. $insertedId .'/edit');

              }else {
                  return redirect('/home');
              }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $user = User::find($id)->userProfile;
        $user = User::with(['userProfile'])->find($id);

      //  return $user;

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$user = User::where('id', $id)->firstOrFail();
    //  $user = User::find($id)->userProfile;
    $user = User::with(['userProfile'])->find($id);

      return view('users.edit')->with('user', $user);
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
            if($request->get('section') == "basicInfo") {
                        $this->validate($request, [
                        'name' => 'max:255',
                        'gender' => 'max:255',
                    ]);
                    $user = User::find($request->get('id'));
                    $user->name = $request->get('name');
                    //$user->email = $request->get('email');
                    $user->gender = $request->get('gender');
                    $user->save();
                return redirect('/users/'. $user->id .'/edit');

        }elseif ($request->get('section') == "userProfile") {
                        $file = $request->file('profile_picture');
                        $imageName = $request->get('id') . '.' . $file->getClientOriginalExtension();
                        $path = 'assets/images/userProfiles/' . $imageName; //file path
                        if (file_exists(public_path($path)))
                              {
                                  unlink(public_path($path)); //delete the file if it exists and replace with new one
                                  $file->move(base_path() . '/public/assets/images/userProfiles/', $imageName);
                              }else{
                                  $file->move(base_path() . '/public/assets/images/userProfiles/', $imageName);
                              }
                          if((UserProfile::where('user_id', $request->get('id'))->first()) == NULL)
                          {
                                $user = new UserProfile(array(
                                    'profile_picture' => $path,
                                    'user_id' => $request->get('id'),
                                ));
                                $user->save();
                            return redirect('/users/'. $request->get('id') .'/edit');
                          }else {
                                $user = UserProfile::where('user_id', $request->get('id'))->first();
                                $user->profile_picture = $path;
                                $user->save();

                            return redirect('/users/'. $user->user_id .'/edit');
                          }

        } else {
            return $request;
        }


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
