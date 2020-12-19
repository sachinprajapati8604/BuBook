<?php
  session_start();
  // Check if the user is logged in, if not then redirect him to loginhandle page
  if (!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true) {
    header("location: index.php");
    exit;
  }
  ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>URBAN KLEID</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .card-text {
      text-align: justify;
    }

    .pics {
      height: 180px;
    }
   
  </style>
</head>

<body>

<?php include 'basic/navbar.php'; ?>

    <div class="alert alert-info" role="alert">
       click to 
        <a href="add_papers.php" class="btn btn-success"> Add More Books</a>
    </div>

<!-- ----adding row for product display---------------- -->

<div class="container my-4">
 <span class=" badge badge-success bg-dark text-wrap mt-4"> <h5 class="title font-weight-bold text-wrap">Your uploaded paper </h5></span> <hr>
    <div class="row">
                    
    <?php

  include 'dbconnect.php';
  // Turn off error reporting
  //  error_reporting(0);

  $sql = "SELECT * FROM `cse_papers` ORDER BY paper_id DESC";
  $result = mysqli_query($conn, $sql);
  $rowcount=mysqli_num_rows($result);
  echo'<h1>Total '.$rowcount.' papers found of cse branch</h1>';
  while ($row = mysqli_fetch_assoc($result)) {
    $paper_id = $row['paper_id'];
    $paper_sem = $row['paper_sem'];
    $paper_name = $row['paper_name'];
    $paper_desc = $row['paper_desc'];
    $paper_link = $row['paper_link'];
    $paper_notes_link = $row['paper_notes_link'];
    $paper_img = $row['paper_img'];
    $created = $row['created'];

    if($paper_notes_link!=""){
        $link2= '<a href="'.$paper_notes_link.'" class="btn btn-secondary">Easy Notes</a> ';
      }
      else{
        $link2="";
      }

    echo' <div class="card-deck my-2 col-md-3">
    <div class="card">
      <img src="../image/'.$paper_img.'" class="card-img-top pics" alt="...">
      <div class="card-body">
      <p class="card-text">Book ID : '.$paper_id.'</p>
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">Book Semester : '.$paper_sem.'</p>
        <p class="card-text">'.$paper_desc.'</p>    
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Book</a> 
        '.$link2.' 
      </div>
      <div class="card-footer bg-light">
      <a href="update_paper.php?paper_id='.$paper_id.'" class="btn btn-warning">Update</a> 
      <a href="delete_paper.php?paper_id='.$paper_id.'"" class="btn btn-danger">Delete</a> 
   
    </div>
    </div>
  </div> ';
  }
  ?>
  </div></div>

    

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