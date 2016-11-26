<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use App\User;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::where('active',1)->orderBy('created_at','desc')->take(2)->get();
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
        //
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
    //  return $slug . '  ' . $post;
      if(!$post)
      {
        return abort(404);
      }
      $comments = $post->comment; //fetch post comments
    //  $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'posts'=> 'posts');
      return view('frontend/v2/includes/show-blog', compact('post', 'comments'));
    }
    public function showBlog()
    {
        $posts = Post::where('active', 1)->orderBy('created_at', 'desc')->get();
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
