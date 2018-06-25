@extends('front-end.main2')

@section('title','| Homepage')

@section('content')

<div class="row">
   
    
        <div class="col-md-4">
          <div class="card" style="margin:20px; width:400px;">
              <img src="/storage/mwt/{{$mwt->photo}}" alt="" 
              style="width:400px;height:400px;"
              class="card-img-top"/>
              <div class="card-body">
                 <h6 class="card-title"> TOPIC: {{strtoupper($mwt->topic)}}</h6><br>
               <h6 class="card-text">DATE:  {{date('M j, Y,' ,strtotime($mwt->time))}}</h6>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default" style="margin-top:20px;">
             <div class="panel-heading">
             <h2>MAKE WE TALK BY: {{strtoupper($mwt->speaker)}}</h2>
             </div>
             <div class="panel-body">
                {{-- <p>{!!$member->biography!!}</p> --}}
             </div>
          </div>
        </div>
      </div>
      @include('admin.partials._footer')

@endsection