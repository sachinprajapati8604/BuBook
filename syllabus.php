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
  
  
<!--NAvbar -->
<!-- including navbar -->
<?php 
include "basic/navbar.php";
include "dbconnect.php";
?>

<!-- alert -->
<div class="container-fluied mt-2">

  <div class="alert alert-warning alert-dismissible fade show ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Student!</strong> The syllabus may be differ in your session .This is according to 2017 to 2021 session.
  </div>
</div>


<!-- including syllabus...... -->
<div class="container my-4 mx-auto">
<div class="bg-info ">
<h3 class="container my-3 p-3">Semester wise Syllabus, B.tech(CSE)</h3>
 </div>
    <div class="row">
  <?php
  $sql = "SELECT * FROM `cse_syllabus`";
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

    echo' <div class="card-deck my-2  col-md-4">
    <div class="card">
  <div class="simgdiv">  <a href="'.$paper_link.'">  <img src="image/'.$paper_img.'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">'.$paper_name.'</h5>
        <p class="card-text">'.$paper_desc.'</p>
      </div>
      <div class="card-footer bg-light">
        <a href="'.$paper_link.'" class="btn btn-info">Open Syllabus</a> 
        '.$link2.' 
      </div>
    </div>
  </div> ';


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