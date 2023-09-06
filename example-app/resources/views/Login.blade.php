<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="panel-body">
    @if(Session::has('message'))
    <div class="alert alert-danger">

     {{Session::get('message')}}

      </div>
      @endif
</div>
    <form action="{{Route('submitlogin')}}" method="POST">
            @csrf
        <h1><b>Login Accout</b></h1>
        USERNAME:
        <input type="email" name="username" id=""> <br>
        PASSWORD:
        <input type="password" name="pass" id=""><br>
        <input type="submit" value="Đăng Nhập">
    </form>


</body>
</html>