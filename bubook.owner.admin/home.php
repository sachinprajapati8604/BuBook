<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BUBooks.com</title>
  <link rel="shortcut icon" type="image/jpg" href="../image/title.jpg" />

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  session_start();
  // Check if the user is logged in, if not then redirect him to loginhandle page
  if (!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true) {
    header("location: index.php");
    exit;
  }
  ?>

<?php include 'basic/navbar.php'; ?>

  <!-- -------------alert-------------- -->

  <div class="alert alert-info" role="alert">
    Welcome <strong> <?php echo htmlspecialchars($_SESSION["admin_fullname"]); ?></strong>
    <a href="index.php" class="btn btn-success"> Logout</a>
  </div>

  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4 text-center title">Hello,  <?php echo htmlspecialchars($_SESSION["admin_fullname"]); ?>!</h1>
      <p class="lead text-center sm-title"><i>Welcome to the admin section of BU Books.</i></p>
      <p>Note - All data are in descending orders, means latest data will be display first. <br>  </p>
      <hr class="my-4">
      <p class="  font-weight-bold">Some Useful Quick Links</p>
     
     <div class="addproduct">
     <h5 class="h3">Upload  Books</h5>
     <a class="btn btn-outline-success btn-lg mt-1" href="add_books.php" role="button">Add  Book</a>
     <a class="btn btn-outline-success btn-lg mt-1" href="view_book.php" role="button">View Books</a>   
     </div> <br>
     <div class="addproduct">
     <h5 class="h3">Upload  Papers</h5>
     <a class="btn btn-outline-success btn-lg mt-1" href="add_papers.php" role="button">Add Paper</a>
     <a class="btn btn-outline-success btn-lg mt-1" href="view_paper.php" role="button">View Papers</a>   
     </div> <br>
   
    </div>
  </div>



<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <!--Get your own code at fontawesome.com-->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</body>
 </html>