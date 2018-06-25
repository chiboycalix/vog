@extends('front-end.main2')

@section('title','| Homepage')

@section('content')

          <div class="row">
            <div class="col-md-4">
              <div class="card" style="margin:20px; width:400px;">

                  <img src="/storage/photos/{{$member->photo}}" alt="" 
                  style="width:400px;height:400px;"
                  class="card-img-top"/>
                  <div class="card-body">
                  NAME<h4 class="card-title">{{strtoupper($member->name)}}</h4>
                  DOB<p class="card-text">{{date('M j, Y', strtotime($member->dob))}}</p>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default" style="margin-top:20px;">
                 <div class="panel-heading">
                 <h2>BIOGRAPHY OF {{strtoupper($member->name)}}</h2>
                 </div>
                 <div class="panel-body">
                    <p>{!!$member->biography!!}</p>
                 </div>
              </div>
            </div>
          </div>
@endsection
