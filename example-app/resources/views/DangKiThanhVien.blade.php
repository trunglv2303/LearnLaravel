<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Kí Thành Viên</title>
</head>

<body>

    <H1>ĐĂNG KÍ TÀI KHOẢNG</H1>
    <form action="{{ Route('getinfodk') }}" method="POST">
        @csrf
      <P>  Email : <input type="email " style="width:50% ;font-family:arial" name="email"> <br>
        Username : <input type="text"style="width:50% ;font-family:arial" name="username"> <br>
        Password : <input type="password"style="width:50% ;font-family:arial" name="pass"> <br>
        <input type="submit" value=" Đăng Kí" style="color: rgb(215, 3, 3) ">
    </form>
</body>

</html>
