@extends('admin.layout')

@section('title')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10" style="position:relative; left:10%;">
                    <div class="card text-center" style="margin-top:100px; margin-bottom:100px;">
                        <div class="card-header">
                           <h2>Vog Registration Page</h2>
                        </div>
                <div class="card-body">
                <form action="{{route('dashboard.store-members')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                       <div class="row">
                           <div class="col-md-2">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>
            </div>
        
            <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                     <label for="email">Email</label>
                 </div>
                 <div class="col-md-10">
                     <input type="text" name="email" class="form-control" id="email">
                 </div>
             </div>
         </div>
        
         <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="number">Phone Number</label>
             </div>
             <div class="col-md-10">
                 <input type="text" name="number" class="form-control" id="number">
             </div>
         </div>
         </div>
        
         <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="dob">Date of Birth</label>
             </div>
             <div class="col-md-10">
                 <input type="date" name="dob" class="form-control" id="dob">
             </div>
         </div>
        </div>
        
        <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                 <label for="address">Address</label>
             </div>
             <div class="col-md-10">
                 <input type="text" name="address" class="form-control" id="address">
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
            <div class="row">
         <div class="col-md-2">
             <label for="biography">Biography</label>
        </div>
        <div class="col-md-10">
        <textarea name="biography" id="biography" cols="30" rows="10" class="form-control"></textarea>
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