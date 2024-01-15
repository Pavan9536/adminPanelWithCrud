<?php
session_start();
if(isset($_SESSION['auth'])){
    header('Location: dashboard.php', true, 301);
    exit();
}
include('src/config.php');
include('src/allCode.php');
$obj = new AllCode();

if(isset($_POST['register'])){
   $res = $obj->storeUser($_POST['name'],$_POST['email'],$_POST['pass']);
   if($res){
    echo "<script>alert('User Successfully Register.!');</script>";
   }else{
    echo "<script>alert('Error! : something wrong.');</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome To Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-md-4">
                <div class="card">
                    <div class="card-header bg-info">
                        User Registration Form
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <div class="mb-3 text-center">
                                <input type="submit" class="btn btn-info" name="register" value="Register">
                            </div>
                        </form>
                        <p>Do have a account. Please <a href="login.php">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>