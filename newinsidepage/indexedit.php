


<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  include_once "../insidepage/connection.php";
  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Welcome to bookstore</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../log-in/index.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../sign-in/index.php">Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="indexupload.php">Upload</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">


        </div>
        <!-- /.row -->
        <h1 ></h1>
<?php 
  session_start();
  $output=$_SESSION['click'];
  //echo "$output";


  include_once "../insidepage/connection.php";
  $sql="SELECT*FROM ".$_SESSION['name']." WHERE id=$output";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  
  // echo "<img src='".$row['image']."'  height='100px' width='150px'>";
  // echo "<div>NAME--- ".$row['bookname']."</div>";
  //   echo "<div>DETAILS---".$row['details']."</div>";
  //   echo "<div>PRICE---".$row['price']."</div>";

echo "


<div class='row featurette'>
      <div class='col-md-7 order-md-2'>
        <h2 class='featurette-heading'>Book Name : ".$row['bookname']."</h2>
        <h3 class='featurette-heading'>INR: ".$row['price']."</h3>
        <p class='lead'>About the book : ".$row['details']."</p>
      </div>
      <div class='col-md-5 order-md-1'>
        <img class='card-img-top' src='../insidepage/".$row['image']."' width='100' height='350'>

       
      </div>
    </div>















";



?>







      <!--     <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../newinsidepage/anime.jpg" width="250" height="250">

       
      </div>
    </div> -->



<hr class="featurette-divider">


















<body class="text-center">


<form class="form-signin" action="update.php" method="post"
enctype="multipart/form-data">
  <!-- <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
  <h1 class="h3 mb-3 font-weight-normal">Edit your book details</h1>
  <!-- <label for="inputEmail" class="sr-only">Email address</label> -->
  <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Book Name" >
  <input type="text" id="inputEmail" name="author" class="form-control" placeholder="Author" >
  
  <input type="text" id="inputEmail" name="price" class="form-control" placeholder="Price" >
  <input type="text" id="inputEmail" name="amount" class="form-control" placeholder="No. of copies" >
  <textarea id="inputEmail" name="details" class="form-control" placeholder="About the Book" ></textarea>
  
<!--   <label for="inputPassword" class="sr-only">Password</label> -->
  <div class="checkbox mb-3">
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
     name="image">
    <label class="custom-file-label" for="inputGroupFile01">Choose book cover</label>
  </div>
    <!-- <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-secondary btn-block" name="submit" type="submit">Upload</button>
  <br>
  <!-- <h3 class="h3 mb-3 font-weight-normal">Delete this book from store</h3> -->
</br>
  <button class="btn btn-lg btn-secondary" name="delete" type="submit">Delete</button>
  <button class="btn btn-lg btn-secondary" name="back" type="submit">Back to home</button>
</form>
<div>
  </div>
<p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>



</body>





      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
