<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
<style>

.background-image{
    background-image:url("assets/img/photo-1575318080244-dd217d9db1e2.jpeg");
}
.offset-2 {
    margin: 0 auto;
}
.body{
    background-color: white;
    margin-top: 60px;
    margin-bottom: 60px;
    padding:50px;

}
.textColor{
    color: #6610f2;
}
.forgetPassword a{
    text-decoration: none;

}
.btn-primary{
    color: white;
    background-color: #6610f2;
}
.color{
    color: #6610f2;
}</style>

</head>



<body class="background-image">


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-10 offset-1 offset-2">
                    <div class="body"><!-- Login Form Input Start  -->
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
                        <h1>Hi! Codecell Limited</h1>
                        <h5>We need some more information</h5>
                        <p> Already  have an account?       <a href="{{route('login')}}" class="textColor">log in</a>
                        </p>

                        <!-- Form Input Field Start  -->
                        <form action="signup_submit" method="post">
                            @csrf
                            <div class="form-group">

                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" name="fname" class="form-control my-2" placeholder="First Name">
                                @error('name')<div class="alert alert-danger">{{$message}}</div>@enderror

                            </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" name="lname" class="form-control my-2" placeholder="Last Name">
                                    @error('name')<div class="alert alert-danger">{{$message}}</div>@enderror
    
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email ">
                                @error('email')<div class="alert alert-danger">{{$message}}</div>@enderror

                            </div>
                            <div class="form-group">
                                <input type="number" name="mobile" class="form-control my-2" placeholder="+880 ">
                                @error('mobile')<div class="alert alert-danger">{{$message}}</div>@enderror

                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control my-2" placeholder="Password ">
                                @error('password')<div class="alert alert-danger">{{$message}}</div>@enderror

                            </div>
                            
                            
                      
                        <div class=" d-flex justify-content-center  "> 
                            
                            <button type="submit" class="btn btn-primary  w-100 ">Sign up</button>

                           
                        </div>                            


<div class="d-flex justify-content-center"> 
    or Log in With

  
   
</div>
<div
class="d-flex justify-content-center"><a class="color" href=""><i class="fa-brands fa-google"></i></a></div>


                        </form> <!-- Form Input Field End  -->
                    </div> <!-- Login Form Input End  -->


                </div>
        </div>
    </div>

</body>

</html>