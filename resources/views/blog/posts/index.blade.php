@extends('blog.blog-layout')

@section('title','| Homepage')

@section('content')


<div class="container">
   
          <div class="row">
            
            <!-- Post Content Column -->
            <div class="col-lg-12">
              <div class="row"  id="posts">
                  @foreach($posts as $post)
                <div class="col-lg-4">
                  
                    
                     <h5 class="mt-4">{{ucfirst($post->title)}}</h5>          
                       <p class="lead" style="font-size:15px;">
                         Posted by 
                         {{strtoupper($post->user->name)}} on {{date('M j, Y',strtotime($post->created_at))}}( {{$post->created_at->diffForHumans()}})
                       </p>      
                       <hr>
                     <a href="{{route('posts.show',$post->id)}}">
                       <img class="img-fluid rounded" id="gsap-img" src="/storage/posts/{{$post->photo}}" style="width:400px; height:300px; position:relative;" alt="">
                     </a>
                       <hr>
                    <p class="lead" style="font-size:15px;">{{ucfirst(substr($post->body,0,200))}} <a href="{{route('posts.show',$post->id)}}">{{strlen($post->body) >50 ? " Read more..." : ""}}</a></p>
                       <hr>
                </div>
                <br />
                @endforeach
              </div>
                
            </div>
                     
                  
            {{-- <div class="col-lg-2">
              <div class="card my-2">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
    
              <!-- Categories Widget -->
              <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a href="#">Web Design</a>
                        </li>
                        <li>
                          <a href="#">HTML</a>
                        </li>
                        <li>
                          <a href="#">Freebies</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a href="#">JavaScript</a>
                        </li>
                        <li>
                          <a href="#">CSS</a>
                        </li>
                        <li>
                          <a href="#">Tutorials</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
    
              <!-- Side Widget -->
              <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                  You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
              </div>
    
            </div> --}}
    
          </div>
          <!-- /.row -->
        
        </div>

       
@endsection
