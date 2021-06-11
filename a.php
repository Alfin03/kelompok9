<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home Page</title>

    <style>
        body {
            font-family: "Open Sans", sans-serif;
            overflow-x: hidden;
        }

        .jumbotron {
            margin-top: -20px;
            width: 100%;
            height: 75vh;
            background-image: url(assets/image/coba.jpg);
            background-position: center;
            size: 50%;
        }
        
        #searchsection{
            border-radius: 10px;
            margin-top: -320px;
            background-color: white;
        }

        #pencarian{
            margin-top: 120px;
        }

         /* IMAGE GALERY FOR KATEGORI */

        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 200px;
        }

        @media (min-width = 720px){
            div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: auto;
        }
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle" data-target="#navbarcollapse">                    
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>  
                </button>
                <a class="navbar-brand" href="index.php">OnlineLibrary</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarcollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="bookshelf.php">Bookshelf</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li data-toggle="modal" data-target="#singform"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li data-toggle="modal" data-target="#loginform"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- END NAVBAR SECTION -->

    <!--SINGUP FORM SECTION-->
    <div class="modal" id="singform">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Sign Up</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form name="signupform" action="buatakun.php" method="post">
                        <div class="form-group has-feedback">
                            <label for="firstname">First Name:</label>
                            <input type="text" class="form-control" placeholder="Enter First Name" name="firstname" pattern="[^' ']+[A-Za-z].{2,8}" title="Please input correct name, e.g = Aaaa (at least 4 character)" required>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="lastname">Last Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname" pattern="[^' ']+[A-Za-z].{2,8}" title="Please input correct name, e.g = Aaaa (at least 4 character)" required>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="number">Phone Number:</label>
                            <input type="number" class="form-control" placeholder="Enter Phone Number" name="no_tlp" required>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="nama">Address</label>
                            <textarea type="text" name="alamat" rows="3" class="form-control md-textarea" required></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <p class="text-dark">&copy; Copyright <a href="index.php">kelompok 4</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--END SINGUP FORM-->

    <!--LOGIN FORM SECTION-->
    <div class="modal" id="loginform">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Log In</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form name="loginform" action="validasilogin.php" method="post">
                        <div class="form-group has-feedback">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <p class="text-dark">&copy; Copyright <a href="index.php">kelompok 4</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--END LOGIN FORM-->

    <!-- HOME SECTION PENCARIAN -->
    <div class="jumbotron">
        <div class="container text-left">
            <h1>Find Your Need</h1>
            <p>#developed website to explore book</p>
        </div>
    </div>

    <div class="container" id="searchsection">
        <br>
        <form class="form-horizontal" name="searchform" method="post" action="index.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="searchby">Search by:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="searchby" name="searchby" required> 
                        <option value='' hidden>--Select Method--</option>
                        <option value='title'>Title</option>
                        <option value='authors'>Author(s)</option>
                        <option value='publisher'>Publisher</option>  
                        <option value='isbn'>ISBN</option> 
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="search">Search: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="search" name="search" pattern="[A-Za-z]+[^' '].{0,}" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="submit"><span class="glyphicon glyphicon-upload"></span>search</button>
                    <button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span>Reset</button>
                </div>
            </div>
        </form>
    </div>
    <!-- END HOME SECTION PENCARIAN -->
    <?php
        if (isset($_POST['submit'])) {
            ?>
            <div class="table-responsive col-sm-10 col-sm-offset-1" id="pencarian">
            <h2>Searching Result</h2>
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Authors</th>
                        <th>Publisher</th>
                        <th>ISBN</th>
                    </tr>
                </thead>
                <tbody>
            <?php
                include "koneksi.php";
                
                $atribut = $_POST['searchby'];
                $nilai = $_POST['search'];
                $querycaribuku = mysqli_query($koneksi, "");
                $jumbuku = mysqli_num_rows($querycaribuku);
                if ($jumbuku == 0) {
                    ?>
                        <tr>
                            <td colspan="8">We are very sorry, there is no book that you're looking for</td>
                        </tr>
                    <?php 
                }

                else {
                    while ($buku = mysqli_fetch_array($querycaribuku))
                    {
            ?>
                <tr>
                    <td><?=$buku['']?></td>
                    <td><?=$buku['']?></td>
                    <td><?=$buku['']?></td>
                    <td><?=$buku['']?></td>
                    <td>
                        <form  method="post" action="#.php">
                            <input type="hidden" id="idbuku" name="id_book" value="<?=$buku['']?>">
                            <button type="submit" class="btn btn-sm btn-info" name="submit"><span class="glyphicon glyphicon-edit"></span>Detail</button>
                        </form>
                    </td>
                </tr>
            <?php
                    }
                }
            ?>
                </tbody>
            </table>
            </div>
            <?php
        }
    ?>

</body>

</html>