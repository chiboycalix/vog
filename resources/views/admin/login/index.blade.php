<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
  
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <link href="css/loginstyle.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body class="login-img3-body">
      <div class="container">
      <form class="login-form" action="{{route('login')}}" method="POST">
                {{ csrf_field() }}
          <div class="login-wrap">
            <p class="login-img"><i class="fa fa-expeditedssl"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Username" autofocus name="name">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <br/>
            <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-bottom:20px;">Login</button>
            {{-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> --}}
          </div>
        </form>
      </div>
</html>