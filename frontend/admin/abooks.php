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
    
    <li class="breadcrumb-item" aria-current="abooks.php">Add books</li>
    <li class="breadcrumb-item active"><a href="aviewb.php">View books</a></li>
  </ol>
</nav>
<h2 class="text-white mt-4 text-center">Add Books</h2>
  <div class="form1">
<form method="post" enctype="multipart/form-data" action="abooks.php">
  <div class="mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label text-white">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Author</label>
    <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">ISBN number</label>
    <input type="text" name="isbn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Published By</label>
    <input type="text" name="pubby" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Image</label>
    <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>  
  </body>
</html>
<?php

if (isset($_POST["submit"])) {
    global $conn;
    $name = $_POST["name"];
    $author = $_POST["author"];
    $isbn = $_POST["isbn"];
    $pubby = $_POST["pubby"];
    $files = $_FILES["img"];
    $filename =  $files['name'];
    $filetmp =   $files['tmp_name'];
    $dstfile = 'images/' . $filename;
    move_uploaded_file($filetmp , $dstfile);
    $sql = "INSERT INTO `books`(`name`, `author`, `isbn`, `publisher`, `image`) VALUES ('$name','$author','$isbn','$pubby','$filename')";
    //$sql = "insert into books('name','author','isbn','publisher','image') values('$name','$author','$isbn','$pubby','$filename')";
    echo "$sql";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        # code...
        
        echo"<script>window.alert('Book entered')</script>";
    }
    else{
        echo"<script>window.alert('Books not entered')</script>";
    }
}
?>