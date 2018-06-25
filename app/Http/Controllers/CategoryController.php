<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Category::all();
        return view('blog.categories.index')->withCategories($categories);
    }

    public function showall($id)
    {  
       
        $posts=Post::where('category_id', $id)->get();
        $category =Category::find($id);
        $categories =Category::all();
        return view('blog.categories.showall')
            ->withPosts($posts)
            ->withCategory($category)
            ->withCategories($categories);
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
        $this->validate($request,array(
            'name' =>'required|max:255',
            'photo'=>'|image|nullable|max:1999'
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
                $path = $request->file('photo')->storeAs('public/category', $fileNameToStore);
             }else{
                 $fileNameToStore = 'noimage.jpg';
             }

           $category = new Category;
           $category->name = $request->name;
           $category->photo = $fileNameToStore;
           $category->save();
   
           Session::flash('success','New Category Created!');
   
           return redirect()->route('categories.index')->withCategory($category);
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
