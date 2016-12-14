<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use App\User;
use App\Contact as ContactUs;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * Write a function that checks if table has data, if not, fail silently and inform admin
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$posts = Post::where('active',1)->orderBy('created_at','desc')->take(2)->get();
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
      //  return $request;
        //  return $request;
            $this->validate($request, [
                  'name' => 'max:255',
                  'email' => 'max:255',
                  'subjectForm' => 'max:255',
                  'messageForm' => 'max:255',
              ]);

              $contact = new ContactUs;
              $contact->name = $request->get('name');
              $contact->email = $request->get('email');
              $contact->subjectForm = $request->get('subjectForm');
              $contact->messageForm = $request->get('messageForm');
              //return $contact;
              $contact->save();
            return redirect('/');
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
      //improve posts page by adding meta description to each page. look at the commented out page
      $meta = [
                'title' => $post->title,
              //  'description' => $post->excerpt,
              //  'image' => '/images/small/'.$post->featuredimage,
              ];
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
