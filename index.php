<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome To Home Page</title>
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
            <div class="col-sm-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Home Page
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome To Home Page</h5>
                        <p class="card-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('layouts/footer.php'); ?>

</body>

</html>