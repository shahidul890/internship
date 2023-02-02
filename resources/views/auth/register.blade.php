@extends('layout.app');
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .font_weight{
            font-weight: bold;
        }
        .btn-success{
            background: rgb(114, 34, 189);
        }
    </style>
  </head>
  <body class="d-flex">
    <form action="{{route('register')}}" method="POST" class="form-login text-center">
        @csrf
        <h2 class="font_weight">Hy! XYZ limited,</h2>
        <p class="font_weight">We need some more information</p>
        <p>Already have an account? <a href="{{route('login')}}" style="text-decoration: none;">Login</a></p>
        <div class="row">
            <div class="col-md-5"><input type="text" name="fname" placeholder="First Name" class="form-control mb-3" required></div>

            <div class="col-md-5"><input type="text" name="lname" placeholder="Last Name" class="form-control mb-3" required></div>
        </div>

        <input type="email" placeholder="Email" name="email" class="form-control mb-3" required>
        <input type="phone" placeholder="phone" name="phone" class="form-control mb-3" required>
        <input type="password" placeholder="password" name="password" class="form-control mb-3" >
        <div class="checkbox mb-3">
            <label for="">
                <input type="checkbox"> Remember Me
            </label>
        </div>
        <button class="btn btn-primary w-100" type="submit">Signup</button>
        <p class="mt-2">Or go With</p>
        <a href=""><i class="fa-brands fa-google btn btn-success"></i></a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>