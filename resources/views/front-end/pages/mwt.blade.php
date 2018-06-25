 
 <section id="portfolio"  class="section-bg" >
  
    <div class="container">

      <header class="section-header">
        <h3 class="section-title">Make we talk</h3>
      </header>
      
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            {{-- <li data-filter=".filter-app">Card</li>
            <li data-filter=".filter-app">Web</li> --}}
          </ul>
        </div>
      </div>


<div class="row portfolio-container" @foreach($mwts as $mwt)>
<div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.1s">
    <div class="portfolio-wrap">
        <figure >                            
    <img src="/storage/mwt/{{$mwt->photo}}" class="img-fluid" alt="">
       <a href="{{route('mwt.show2',$mwt->id)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
  </figure >
  <div class="portfolio-info">
  <h4><a href="#">SPEAKER: {{strtoupper($mwt->speaker)}}</a></h4>
  <p>Topic: {{$mwt->topic}}</p><br/>

  </div>
</div>
</div @endforeach >
</section><!-- #portfolio -->