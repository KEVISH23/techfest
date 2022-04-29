<?php 
include("../../backend/index.php");
?>
<?php 
session_start();
if (!(isset($_SESSION['uname']))) {
  # code...
  echo "<script>window.open('index.php','_self')</script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>TechFest</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="  navbar-brand" href="admin/index.php">Library Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="abooks.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="auser.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    
  <li class="breadcrumb-item active"><a href="abooks.php"> Add books</a></li>
  <li class="breadcrumb-item" aria-current="aviewb.php"> View books</li>
  </ol>
</nav>
<div class="row">
<?php
global $conn;
$sql = "select * from books";
$res = mysqli_query($conn,$sql);
if ($res) {
    # code...
    $num = mysqli_num_rows($res);
    if ($num>0) {
        # code...
        while($row = mysqli_fetch_assoc($res)){
            $img =  $row['image'];
            echo " <div class='col-md-4'>
            <div class='card-deck'>
            <div class='card'>
                <img src='images/$img' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>Book </h5>
                    <p class='card-text'>Book Title: ".$row['name']."</p>
                    <p class='card-text'>Author:  ".$row['author']."</p>
                </div>
               
            </div>
        </div>
        </div>";
        }
    }
}
?>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>  
  </body>
</html>
