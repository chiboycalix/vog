<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('front-end.partials._header')
</head>
<body>
    @include('front-end.partials._navbar')
    
    @include('front-end.partials._message')
       
      
            @yield('content')
             
      
           
        @include('front-end.partials._footer')
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        @include('front-end.partials._javascript')
  
    
</body>
</html>