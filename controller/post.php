<?php
session_start();
include '../enclode/enc.php';

if(isset($_POST['submit'])){
    $post_name = $_POST['post_name'];
    $post_details = $_POST['post_details'];
    $post_date = $_POST['post_date'];

    if(empty($post_name)){
        $_SESSION['error_post_name']='enter post name';
        header ("location: ../index.php");
    }
    if(empty($post_details)){
        $_SESSION['error_post_details']='enter post details';
        header ("location: ../index.php");
    }
}else{
    $insert = "INSERT INTO post(id, post_name, post_details, date) VALUES ('$post_name', '$post_details', '$post_date')";


    $query = mysqli_query($connect, $insert);


    if($query){
        header ("location: ../index.php");
    }
}





?>