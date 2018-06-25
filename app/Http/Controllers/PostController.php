<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Validate;
use App\User;
use App\Comment;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $categories = Category::all();
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('blog.posts.index')->withPosts($posts)->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('blog.posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,array(
            'title'=>'required',
            'photo'=>'|image|nullable|max:1999',
            'body' =>'required'           
        ));
        
          
        if($request->hasFile('photo')){
           //get file name with extension
           $filenameWithExt = $request->file('photo')->getClientOriginalName();
           //get file name
           $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
           //get file extension
           $extension = $request->file('photo')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('photo')->storeAs('public/posts', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->photo = $fileNameToStore;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->save();
        Session::flash('success','New Post added');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $comments =Comment::orderBy('id','desc')->paginate(10);
        $users =User::all();
        $categories = Category::all();
        $post = Post::find($id);
        return view('blog.posts.show')->withPost($post)->withComments($comments)->withUsers($users)->withCategories($categories);
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
