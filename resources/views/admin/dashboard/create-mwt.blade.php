@extends('admin.layout')

@section('title')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10" style="position:relative; left:5%;">
                    <div class="card text-center" style="margin-top:100px; margin-bottom:100px;">
                        <div class="card-header">
                           <h2>Make We Talk</h2>
                        </div>
                <div class="card-body">
                <form action="{{route('dashboard.store-mwt')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                       <div class="row">
                           <div class="col-md-2">
                        <label for="topic">Topic</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="topic" class="form-control" id="topic">
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                     <label for="speaker">Speaker</label>
                 </div>
                 <div class="col-md-10">
                     <input type="text" name="speaker" class="form-control" id="speaker">
                 </div>
             </div>
         </div>       
        
         <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="dob">Date</label>
             </div>
             <div class="col-md-10">
                 <input type="date" name="time" class="form-control" id="time">
             </div>
         </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-md-2">
            <label for="photo">Dispaly Photo</label>
        </div>
        <div class="col-md-10">
            <input type="file" class="form-control" name="photo" id="photo">
        </div>
         </div>
        </div> 
         
        <div class="form-group">
           <button type="submit" class="btn btn-success pull-right">Save</button>
        </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>

@endsection