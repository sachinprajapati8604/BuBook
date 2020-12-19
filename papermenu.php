<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/jpg" href="image/title.jpg" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>BUBooks.com</title>


  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- including navbar -->
  <?php
  error_reporting(0);
  include "basic/navbar.php";
  include 'dbconnect.php';
  ?>
<div class="alert alert-warning alert-dismissible fade show ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert !</strong> 6th semester papers had been cancelled due to covid-19.
  </div>

<!-- including books for 7th semester...... -->
<div class="container my-4">

 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Papers-7th Semester  4th year(CSE) </h5> <hr>
 
    <div class="row">
  <?php
 
  $sql = "SELECT * FROM `cse_papers`";
  $result = mysqli_query($conn, $sql);
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
    
if($paper_sem==7){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link.'">  <img src="image/'.$paper_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">'.$paper_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Paper</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';

}

  }
  ?>
    </div>
    
  </div>

<!-- including books for 5th semester...... -->
<div class="container my-4">

 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Papers-5th Semester  3rd year(CSE)</h5> <hr>
 
    <div class="row">
  <?php

  $sql = "SELECT * FROM `cse_papers`";
  $result = mysqli_query($conn, $sql);
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
    
if($paper_sem==5){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link.'">  <img src="image/'.$paper_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">'.$paper_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Paper</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';

}

  }
  ?>
    </div>
    
  </div>


<!-- including books for 4th semester...... -->
<div class="container my-4">
 
 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Papers-4th Semester  3rd year(CSE)</h5> <hr>
 
    <div class="row">
  <?php
  $sql = "SELECT * FROM `cse_papers`";
  $result = mysqli_query($conn, $sql);
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
    
if($paper_sem==4){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link.'">  <img src="image/'.$paper_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">'.$paper_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Paper</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';

}

  }
  ?>
    </div> 
  </div>

<!-- including books for 3rd semester...... -->
<div class="container my-4 ">
 
 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Papers-3rd Semester  2nd year(CSE)</h5> <hr>
 
    <div class="row">
  <?php
 
  $sql = "SELECT * FROM `cse_papers`";
  $result = mysqli_query($conn, $sql);
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
    
if($paper_sem==3){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link.'">  <img src="image/'.$paper_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">'.$paper_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Paper</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';

}

  }
  ?>
    </div> 
  </div>

  <!-- including books for 3rd semester...... -->
<div class="container my-4 ">
 
 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Papers-1st year(CSE) </h5> <hr>
  
 <div class="row">
  <?php
 
  $sql = "SELECT * FROM `cse_papers`";
  $result = mysqli_query($conn, $sql);
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
    
if($paper_sem==1){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link.'">  <img src="image/'.$paper_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">'.$paper_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Paper</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';

}

  }
  ?>
    </div> 
  </div>



  
  <!-- including footer -->
  <?php
  include "basic/footer.php";
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>