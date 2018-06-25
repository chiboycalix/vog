<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{Html::style('css/memberscss.css')}}
    <title>Document</title>
    @include('front-end.partials2._header')
</head>
<body>
    @include('front-end.partials2._navbar')
    
        @include('front-end.partials2._message')
      
            @yield('content')
             
        </section>
        
        @include('front-end.partials2._footer')
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        @include('front-end.partials2._javascript')
  
    
</body>
</html>