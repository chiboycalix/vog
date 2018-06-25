<!DOCTYPE html>
<html lang="en">
<head>
        @include('admin.partials._header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{Html::style('css/dashboard.css')}}
    <title>Document</title>
    
</head>
<body class="fix-header fix-sidebar">
        @include('admin.partials._navbar')
        
            @include('admin.partials._message')
          
                @yield('content')

                @include('admin.partials._footer')
               
                @include('admin.partials._javascript')
    </body>
</html>