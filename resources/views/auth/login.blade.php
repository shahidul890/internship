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
                        <h1>Welcome Back!</h1>
                        <h5>Please log in to access your account</h5>
                        <p> Dont have account?       <a href="" class="textColor">sign in</a>
                        </p>

                        <!-- Form Input Field Start  -->
                        <form action="login_submit" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control my-2" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="password ">

                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="forgetPassword d-flex justify-content-end">
                                    <a href="#" class="textColor">Forget Passwor</a>
                                    </div>
                                </div>
                            </div>

                        <div class=" d-flex justify-content-center  "> 
                            <div class="color" >
                            <button  class="btn btn-primary  px-5 ">Log in</button>

                            </div>
                        </div>                            


<div class="d-flex justify-content-center"> 
    or Log in With

  
   
</div>
<div
class="d-flex justify-content-center"><a href=""><i class="fa-brands fa-google"></i></a></div>


                        </form> <!-- Form Input Field End  -->
                    </div> <!-- Login Form Input End  -->


                </div>
        </div>
    </div>

</body>

</html>