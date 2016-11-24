<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use App\Post;
use App\Comment;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get 5 latest posts from db that are active
        $posts = Post::where('active',0)->orderBy('created_at', 'desc')->paginate(1);
      //  $posts = Post::all()->paginate(5);
        //heading
      //  $pageData = (object)array('title' => 'Latest Posts', 'css' => 'sidebar-collapse', 'css2' => 'sidebar_shift', 'css3' => 'collapseit');
      //  return view('posts.index', compact('posts', 'pageData'));
      $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'posts'=> 'posts');
        //return view('posts.show', compact('posts', 'post', 'css'));
      //  return $posts;
        return view('posts.index', compact('posts', 'css'));
    }

    /**
     * Show the form for creating a new resource.
     *Take into consideration the user level
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //check if user is admin or author for them to Post
      //  if($request->user()->can_post()) //change to this after doing a fresh migration
        if(($request->user()->can_post()))
        {
          $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'posts'=> 'posts');
          return view('posts.create', compact('css'));

        }else {
          return redirect('/')->withErrors('Sorry you dont have the rights to create posts');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
    //  return '<pre>'. $request. '</pre>' . '<br>' . $request->get('body') . $request->ip();

        $post = new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->slug = str_slug($post->title);
        $post->author_id = $request->user()->id;
          if($request->has('save'))
          {
            $post->active = 0;
            $message = 'Post Created';
          }else{
            $post->active = 1;
            $message = 'Post Published';
          }
      //  return $post . '<br>' . $message;
        $post->save();
        return redirect('Posts/'. $post->slug .'/edit');
      //  return redirect('edit/'. $post->slug)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug (post slug instead of id)
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if(!$post)
        {
          return redirect('/')->withErrors('Post not found');
        }
        $comments = $post->comment; //fetch post comments
        return view('posts.show', compact('post', 'comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug (using post slug instead of id. the slug is unique)
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        //check if post has been fetched and if user is the author or admin
        if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
        {
          return view('posts.edit', compact('post'));
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
        $post = Post::find($request->get('post_id'));
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
          $title = $request->get('title');
          $slug = str_slug($title);
          $duplicate = Post::where('slug',$slug)->first();
          if($duplicate)
            {
              //checking duplicate post title
              if($duplicate->id != $request->get('post_id'))
              {
                return redirect('edit/'. $post->slug)->withErrors('Title already exists');
              }else {
                $post->slug = $slug;
              }
            }
            $post->title = $title;
            $post->body = $request->get('body');
            if($request->has('save'))
            {
              $post->active = 0;
              $message = 'Post Saved successfully';
              $landing = 'edit/'. $post->slug;
            }else {
              $post->active = 1;
              $message = 'Post updated successfully';
              $landing = $post->slug;
            }
            $post->save();

            return redirect($landing)->withMessage($message);
        }else {
          return redirect('/')->withErrors('You dont have the right to edit this post.' );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        if($post &&($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
          $post->delete();
          $data['message'] = 'post deleted';
        }else {
          $data['errors'] = 'invalid operation. you cant delete post';
        }
        return redirect('/')->with($data);
    }

    public function userPosts(Request $request, $id)
    {
        //check if user is admin or author for them to Post
      //  if($request->user()->can_post()) //change to this after doing a fresh migration
    //  $posts = Post::where('author_id',$id)->where('active',1)->orderBy('created_at','desc')->paginate(5);
      $posts = Post::where('author_id',$id)->where('active',1)->orderBy('created_at','desc')->get();
    //  return $posts;
      $css = (object)array('openDropdown' => 'open', 'linkActive' => 'active', 'posts'=> 'posts', 'published'=> 'Published Posts');
      return view('posts.published', compact('css', 'posts'));
    }
}
