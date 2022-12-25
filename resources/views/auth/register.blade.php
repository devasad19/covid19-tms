



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid 19 Testing Management System | Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
 
</head>

<body class="bg-gradient-primary">

    <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
 <h3 align="center" style="margin-top:4%;color:#fff">Covid Testing Management System</h3>


 
        @include('backend.includes.alerts')
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign Up</h1>
                                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" 
                                                id="username" placeholder="Enter Your Name" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" 
                                                id="" placeholder="username" required="true">
                                        </div>
                                         
                                    <div class="form-group">
                                      <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control">
                                        </div>

                                            <div class="form-group">
                               <input type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="off" class="form-control">
                                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block" >Submit</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="user-login.php" style="font-weight:bold">Signin</a>
                                    </div>
                               <div class="text-center">
                                        <a class="small" href="index.php" style="font-weight:bold;"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>

 
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>






  