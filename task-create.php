<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: index.php', true, 301);
    exit();
}
include('src/config.php');
include('src/allCode.php');
$obj = new AllCode();

if(isset($_POST['submit'])){
   $res = $obj->storeTask($_POST['title'],$_POST['desc']);
   if($res){
    echo "<script>alert('Task Successfully Insert.!');</script>";
   }else{
    echo "<script>alert('Error! : something wrong.');</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome To Create Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include('layouts/header.php'); ?>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include('layouts/sideNavBar.php'); ?>
            </div>
            <div class="col-md-6 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Add New Task
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="desc" rows="4"></textarea>
                            </div>
                            <div class="mb-3 text-center">
                                <input type="submit" class="btn btn-info" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('layouts/footer.php'); ?>

</body>

</html>