@extends('layout.app');
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        html, body{
            height: 100%;
        }
        body{
            background: url(bg.jfif);
            background-size: cover;
        }
        .form-login{
            background: rgb(231, 230, 231);
            border-radius: 10px;
            margin: auto;
            padding: 20px;
            max-width: 450px;
            width: 100%;

        }
        .btn-primary{
            background: rgba(114, 34, 189);
            border: 0;
        }
        .btn-primary:hover{
            background: rgb(38, 212, 76);
            border: 0;
        }
    </style>
  </head>
  <body class="d-flex">
    <form action="{{route('login')}}" method="POST" class="form-login text-center">
        @csrf
        <h2>User login</h2>
        <input type="email" placeholder="Enter your Email Address" name="email" class="form-control mb-3" required>
        <input type="password" placeholder="Enter your password" name="password" class="form-control mb-3" >
        <div class="checkbox mb-3">
            <label for="">
                <input type="checkbox">Remember Me
            </label>
        </div>
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>