@extends('blog.blog-layout')

@section('title',' | All Categories')

@section('content')

<div id="posts">
    <div class="col-md-6"> 
     <h3>{{$category->name}}({{$category->posts->count()}})</h3>                     
        @foreach($posts as $key => $post)
            <div class="title-post">
                <li @if ($key === 0) @endif>
                    <a href="{{route('posts.show',$post->id)}}"><p>{{$key+1}}. {{$post->title}}</p></a>
                </li>       
            </div>           
        @endforeach
    </div>
    <div class="col-md-8">
        
    </div>
    
</div>
 


@endsection