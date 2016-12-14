<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use App\User;
use App\Contact as ContactUs;
use App\Notifications\contactUsNotification;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * Write a function that checks if table has data, if not, fail silently and inform admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::where('status',2)->orderBy('created_at','desc')->take(2)->get();
      return view('frontend/v2/includes/index', compact('posts')); //index
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
        $users = User::all();
                      foreach ($users as $user) {
                        $user->notify(new contactUsNotification($request));
                      }
            return back()->with('contactMessageSent', 'hello');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $post = Post::where('slug', $slug)->first();
      if(!$post)
      {
        return abort(404);
      }
      $meta = [
                'title' => $post->title,
                'description' => $post->summary,
              //  'image' => '/images/small/'.$post->featuredimage,
              ];
      $comments = $post->comment; //fetch post comments
      return view('frontend/v2/includes/show-blog', compact('post', 'comments','meta'));
    }
    public function showBlog()
    {
    //  $posts = Post::paginate(2);
      //  $posts = Post::where('status', 2)->orderBy('created_at', 'desc')->get();
        $posts = Post::where('status', 2)->orderBy('created_at', 'desc')->simplePaginate(6);
        return view('frontend/v2/includes/blog', compact('posts'));
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
