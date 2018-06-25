@extends('blog.blog-layout')

@section('title','| Homepage')

@section('content')



  <div class="container">
    
    
      <div class="row" id="posts">
        <div class="col-lg-8 col-lg offset-2">
           <h1 class="mt-4" style="text-align:center;">{{ucfirst($post->title)}}</h1>
              <p class="lead" style="text-align:center;">
                  Posted by 
                  {{strtoupper($post->user->name)}} {{$post->created_at->diffForHumans()}}
              </p>
               
                <hr>
                  <img class="img-fluid rounded" src="/storage/posts/{{$post->photo}}" style="height:400px; width:700px;" alt="No Photo">
                  <hr>
                     <p class="lead">{{$post->body}}</p> 
                       <span class="badge badge-secondary">{{$post->category->name}}</span>
                        <hr>
                         <br>
                        <div class="col-md-12">
                            <h3><span class="fa fa-comments-o" id="comment-icon" arial-hidden="true"></span> Comments({{$post->comments()->count()}})</h3>
                            <hr>
                        </div>
                          @foreach($post->comments as $comment)
                       
                          
                          <div class="row" id="comment-container">
                            
                            <div class="col-md-1">
                              <img src="{{"https://www.gravatar.com/avatar/" .md5(strtolower(trim($comment->email))) ."?s=50&d=mm"}}" alt="" id="author-image">
                              
                            </div>
                            <div class="col-md-8">
                              <span>
                              <p id="author-name">Comment by: {{ucfirst($comment->name)}}, {{$comment->created_at->diffForHumans()}}</p>
                              
                              </span>
                              <p id="author-comment">
                                {{$comment->comment}}
                              </p>
                            </div>
                          </div>
                         <hr>
                         @endforeach

                         <div class="row">
                            <div class="col-md-12">
                                @if(Auth::user())
                                <h3>Add your Comment</h3>   
                              {!!Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])!!}
                                  <div class="row">
                                    <div class="col-md-6">
                                        {{Form::label('name','Name:')}}
                                        {{Form::text('name',null,['class'=>'form-control','id'=>'emailsize'])}}
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        {{Form::label('email','Email:')}}
                                        {{Form::email('email',null,['class'=>'form-control','id'=>'emailsize'])}}
                                        
                                    </div>
                                  </div>                                  
                                    {{Form::label('comment','Comment:')}}
                                    {{Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])}}
                                    <br>
                                    <div class="row">
                                      <div class="col-md-4 col-md offset-4">
                                          {{Form::submit('Add Comment',['class'=>'btn btn-success btn-block ','id'=>'emailsize','style'=>'margin-top:10px; margin-bottom:20px;'])}}
                                      </div>
                                    </div>
                                    
                          
                              {!!Form::close()!!}
                          @else
                          <h3>You must Login in to participate in this discussion </h3>
                          
                              @endif
                            </div>
                          </div>

            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
