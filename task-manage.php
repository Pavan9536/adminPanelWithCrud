<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: index.php', true, 301);
    exit();
}
include('src/config.php');
include('src/allCode.php');
$obj = new AllCode();
$res = $obj->viewTask(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome To Manage Task</title>
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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h4>Manage Tasks</h4>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-info" href="task-create.php">Add New Task</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Create Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($res)){ ?>
                                <tr>
                                    <td><?=$row['title']?></td>
                                    <td><?=$row['description']?></td>
                                    <td><?=$row['created_at']?></td>
                                    <td><?=$row['updated_at']?></td>
                                    <td>
                                        <a class="btn btn-info" href="task-edit.php?id=<?=$row['id']?>">Edit</a>
                                        <a class="btn btn-danger" href="task-delete.php?id=<?=$row['id']?>">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('layouts/footer.php'); ?>

</body>

</html>