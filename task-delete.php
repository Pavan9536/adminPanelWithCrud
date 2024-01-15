<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: index.php', true, 301);
    exit();
}
include('src/config.php');
include('src/allCode.php');
$obj = new AllCode();

$res = $obj->deleteTaskById($_GET['id']);

   if($res){
    header('Location: task-manage.php');
   }else{
    echo "<script>alert('Error! : something wrong.');</script>";
   }

?>