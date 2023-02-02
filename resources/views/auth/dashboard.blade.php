<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Template Main CSS File -->
<style>
    .background-image{
    background-image: url("assets/img/bg-1.jpeg");
}
.offset-2 {
    margin: 0 auto;
}
.body{
    background-color: white;
    margin-top: 70px;
    margin-bottom: 70px;
    padding:50px;

}
.textColor{
    color: #6610f2;
}
.forgetPassword a{
    text-decoration: none;

}
.color{
    background-color: #6610f2;
}

</style>
</head>
<body class="background-image">
@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif
@if (session('danger'))
<div class="alert alert-danger">
{{session("danger")}}
</div>
@endif
<div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-10 offset-1 offset-2">
                <div class="body"><!-- Login Form Input Start  -->
<button>{{auth()->user()->name}}</button>

              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
          </div>
            </div>
            </div>

            </div>

</body>
</html>