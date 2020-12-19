<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>BUBooks.com</title>
  <link rel="shortcut icon" type="image/jpg" href="image/title.jpg" />
  <link rel="stylesheet" href="css/style.css">

 
</head>

<body>

  <!-- including navbar -->
  <?php
  error_reporting(0);
  include "basic/navbar.php";
  include 'dbconnect.php';
  ?>


<!-- including books for 7th semester...... -->
<div class="container my-4">
 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Books-7th Semester,  4th year(CSE) </h5> <hr>
    <div class="row">
  <?php
  include 'dbconnect.php';
  $sql = "SELECT * FROM `cse_books`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $book_id = $row['book_id'];
    $book_sem = $row['book_sem'];
    $book_name = $row['book_name'];
    $book_desc = $row['book_desc'];
    $book_link = $row['book_link'];
    $book_notes_link = $row['book_notes_link'];
    $book_img = $row['book_img'];
    $created = $row['created'];

    if($book_notes_link!=""){
      $link2= '<a href="'.$book_notes_link.'" class="btn btn-secondary">Easy Notes</a> ';
    }
    else{
      $link2="";
    }
    
if($book_sem==7){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$book_link.'">  <img src="image/'.$book_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$book_name.'</h5>
        <p class="card-text">'.$book_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$book_link.'" class="btn btn-info">Open Book</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';

}
  }
  ?>
    </div>
    
  </div>

  
<!-- including books for 6th semester...... -->
 <div class="container my-4">
 
 <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold">Books-6th Semester,  3rd year(CSE) </h5> <hr>
 
    <div class="row">
  <?php
  include 'dbconnect.php';
  $sql = "SELECT * FROM `cse_books`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $book_id = $row['book_id'];
    $book_sem = $row['book_sem'];
    $book_name = $row['book_name'];
    $book_desc = $row['book_desc'];
    $book_link = $row['book_link'];
    $book_notes_link = $row['book_notes_link'];
    $book_img = $row['book_img'];
    $created = $row['created'];
    
    if($book_notes_link!=""){
      $link2= '<a href="'.$book_notes_link.'" class="btn btn-secondary">Easy Notes</a> ';
    }
    else{
      $link2="";
    }
if($book_sem==6){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$book_link.'">  <img src="image/'.$book_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$book_name.'</h5>
        <p class="card-text">'.$book_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$book_link.'" class="btn btn-info">Open Book</a>
        '.$link2.' 
      </div>
    </div>
  </div>';

}
  }
  ?>
    </div>
  </div>

<!-- including books for 5th semester...... -->
 <div class="container my-4">
  
  <h5 class=" bg-dark text-light p-3 mt-4 font-wight-bold"> Books-5th Semester,  3rd year(CSE)</h5> <hr>
 
    <div class="row">
  <?php
  
  $sql = "SELECT * FROM `cse_books`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $book_id = $row['book_id'];
    $book_sem = $row['book_sem'];
    $book_name = $row['book_name'];
    $book_desc = $row['book_desc'];
    $book_link = $row['book_link'];
    $book_notes_link = $row['book_notes_link'];
    $book_img = $row['book_img'];
    $created = $row['created'];
    
    if($book_notes_link!=""){
      $link2= '<a href="'.$book_notes_link.'" class="btn btn-secondary">Easy Notes</a> ';
    }
    else{
      $link2="";
    }
if($book_sem==5){
    echo' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$book_link.'">  <img src="image/'.$book_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$book_name.'</h5>
        <p class="card-text">'.$book_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$book_link.'" class="btn btn-info">Open Book</a>
        '.$link2.' 
      </div>
    </div>
  </div>';
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