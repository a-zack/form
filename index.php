
<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Post book</title>
    <style>
            textarea.from-control.my-3 {
                width: 100%;
            }
            input.from-control.my-3 {
                width: 100%;
            }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid ">
    <div class="container container">
    <a class="navbar-brand" href="#">Facebook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All Post</a>
            </li>
    </div>
    </div>
</nav>

        <form class="mt-3 container" action="./controller/post.php" method="POST">
            <input type="text" name="post_name" placeholder="post_name" class="from-control my-3">
            <span class="text-danger">
                <?php
                if(isset($_SESSION['error_post_name'])){
                    echo $_SESSION['error_post_name'];
                }
                ?>
            </span>
            <textarea name="post_details" class="from-control my-3"></textarea>
            <span class="text-danger">
                <?php
                if(isset($_SESSION['error_post_details'])){
                    echo $_SESSION['error_post_details'];
                }
                ?>
            </span>

            <input type="date" name="post_date" placeholder="date" class="from-control my-3"> 
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php

session_unset();
?>