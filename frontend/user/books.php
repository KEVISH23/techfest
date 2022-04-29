<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>User</title>
    <style>
        body {
            background-color: rgb(2, 65, 65);
        }
    </style>
</head>

<body>
    <!-- ================================================================= -->
    <!-- navbar  -->
    <!-- ================================================================= -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Library Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="books.php">Books</a>
                    </li>

                </ul>
                <button type="submit" class="btn btn-success m-2" data-toggle="modal" data-target="#loginmodal">
                    Login
                </button>
                <button type="submit" class="btn btn-success m-2" data-toggle="modal" data-target="#signupmodal">
                    SignUp
                </button>
            </div>
        </nav>
    </header>
    <!-- Login Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SignUp Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SignUp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">email </label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile </label>
                            <input type="number" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                        </div>
                        <button type="submit" class="btn btn-primary">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================================= -->
    <!-- cards  -->
    <!-- ================================================================= -->
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="https://source.unsplash.com/500x400/?book" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book </h5>
                    <p class="card-text">Book Title:</p>
                    <p class="card-text">Author:</p>
                </div>
                <div class="card-footer">
                    <button type="submit" onclick="myFunction()" class="btn btn-success">Issue Now</button>
                </div>
            </div>
            <div class="card">
                <img src="https://source.unsplash.com/500x400/?book" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book </h5>
                    <p class="card-text">Book Title:</p>
                    <p class="card-text">Author:</p>
                </div>
                <div class="card-footer">
                    <button type="submit" onclick="myFunction()" class="btn btn-success">Issue Now</button>
                </div>
            </div>
            <div class="card">
                <img src="https://source.unsplash.com/500x400/?book" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Book </h5>
                    <p class="card-text">Book Title:</p>
                    <p class="card-text">Author:</p>
                </div>
                <div class="card-footer">
                    <button type="submit" onclick="myFunction()" class="btn btn-success">Issue Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================SCRIPT================================ -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script>
    function myFunction() {
        alert("Please Login To Issue A Book!");
    }
</script>

</body>

</html>
