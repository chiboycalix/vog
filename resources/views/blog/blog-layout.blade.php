<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('blog.partials._header')
</head>
<body>
        
    
    @include('blog.partials._navbar')

    @include('blog.partials._category')
    
    @include('blog.partials._message')
   
            @yield('content')
             
      
           
    @include('blog.partials._footer')
    @include('blog.partials._javascript')
  
    
</body>
</html>