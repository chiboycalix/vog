<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;
use App\Mwt;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $members = Member::all();
        $mwts = Mwt::all();
        $posts = Post::all();
        return view('admin.dashboard.index')
        ->withMembers($members)
        ->withMwts($mwts)
        ->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.create-members');
    }

    public function create2()
    {
        return view('admin.dashboard.create-mwt');
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
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'biography'=>'required',
            'photo'=>'|image|nullable|max:1999',
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
           $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->number = $request->number;
        $member->address = $request->address;
        $member->dob = $request->dob;
        $member->biography = $request->biography;
        $member->photo = $fileNameToStore;
        $member->save();
        Session::flash('success','New User added');
        return redirect()->route('dashboard.show-members', $member->id);
    }

    public function store2(Request $request)
    {
        
      $this->validate($request , array(
        'topic'=>'required',
        'speaker'=>'required',
        'photo'=>'|image|nullable|max:1999',
        'time'=>'required'
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
      $path = $request->file('photo')->storeAs('public/mwt', $fileNameToStore);
     }else{
       $fileNameToStore = 'noimage.jpg';
      }
   
      $mwt = new Mwt;
      $mwt->topic = $request->topic;
      $mwt->speaker = $request->speaker;
      $mwt->time = $request->time;
      $mwt->photo = $fileNameToStore;
      $mwt->save();
      Session::flash('success','New Post Added');
      return redirect()->route('dashboard.show-mwt', $mwt->id);
   

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('admin.dashboard.show-members')->withMember($member);
    }

    public function show2($id)
    {
        $mwt = Mwt::find($id);
        return view('admin.dashboard.show-mwt')->withMwt($mwt);
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
