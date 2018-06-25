<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Mwt;
use Session;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view ('front-end.members.index')->withMembers($members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        return redirect()->route('members.show', $member->id);
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
        return view('front-end.members.show')->withMember($member);
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
