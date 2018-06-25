<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mwt;
use Mail;
use Session;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mwts =Mwt::all();
        return view('front-end.pages.index')->withMwts($mwts);
    }



    public function contact(Request $request){
       
       /* $this->validate($request, array(
             'name'=>'required',
             'email'=> 'required | email',
             'subject'=>'required |min:3',
             'body'=>'required |min:10'
        ));*/

        $data = array(
            'email'=> $request->email,
            'subject'=> $request->subject,
            'name'=> $request->name,
            'body'=> $request->body,
        );




        Mail::send('front-end.emails.contact', $data, function($msg) use ($data){
                $msg->from($data['email']);
                
                $msg->to('igwechinonso1994@gmail.com');
                $msg->subject($data['subject']);
        });

        
        echo 'message sent'; //Session::flash('mail_msg','message sent');

        
        //return redirect()->url('contact');
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
