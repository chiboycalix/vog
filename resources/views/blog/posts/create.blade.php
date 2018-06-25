@extends('blog.blog-layout')

@section('title','| Homepage')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10 col-md offset-1" id="form-div">
        <div class="card" style="width: 60rem;">          
            <div class="card-body">
                <h1 class="card-title" style="text-align:center;">Create New Post</h1>
                
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1">
                                         <label for="title">Title</label>       
                                    </div>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" name="title" id="title">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-1">
                                             <label for="name">Category</label>       
                                        </div>
                                        <div class="col-md-9">
                                                <select class="form-control" name="category_id">
                                                        @foreach($categories as $category)
                                                             
                                                        <option value="{{$category->id}}" id='emailsize'>{{$category->name}}</option>
                                                              
                                                        @endforeach
                                                        </select>
                                        </div>
                                    </div>
                                </div>
                
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-1">
                                             <label for="photo">Photo</label>       
                                        </div>
                                        <div class="col-md-9">
                                           <input type="file" class="form-control" name="photo" id="photo">
                                        </div>
                                    </div>
                                </div>
                             
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-1">
                                             <label for="body">Body</label>       
                                        </div>
                                        <div class="col-md-9">
                                           <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-block" id="post-btn" type="submit">Add Post</button>
                                    </div>
                                </div>
                        </form>
            </div>
        </div>
       
    </div>
</div>
</div>


@endsection