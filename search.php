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


    <div class="container my-4 ">
<?php
 $squery = $_GET['query'];
 echo '<h3 class="font-italic py-0 text-center"> Search results PAPERS for  <mark class="p-0 m-0 bg-warning">' . $squery . '</mark> </h3> ';
?>
        <hr>

        <div class="row">
            <?php

            $sql = "SELECT * FROM `cse_papers` union SELECT * FROM `cse_syllabus` ";
            $result = mysqli_query($conn, $sql);
            $iter=0;
            while ($row = mysqli_fetch_assoc($result)) {
                $iter++;     
                $paper_id[$iter] = $row['paper_id'];
                $paper_sem[$iter] = $row['paper_sem'];
                $paper_name[$iter] = $row['paper_name'];
                $paper_desc[$iter] = $row['paper_desc'];
                $paper_link[$iter] = $row['paper_link'];
                $paper_notes_link[$iter] = $row['paper_notes_link'];
                $paper_img[$iter] = $row['paper_img'];
                $created[$iter] = $row['created'];

            }
           
            $noresult = true;
            for ($i = 1; $i <= $iter; $i++) {
                if ((preg_match(strtolower("/$squery/"), strtolower($paper_sem[$i])) || preg_match(strtolower("/$squery/"), strtolower($paper_name[$i])) || preg_match(strtolower("/$squery/"), strtolower($paper_desc[$i])) || preg_match(strtolower("/$squery/"), strtolower($paper_img[$i])))) {
                  
                    $noresult = false;
                    echo ' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link[$i].'">  <img src="image/'.$paper_img[$i].'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">' . $paper_name[$i] . '</h5>
        <p class="card-text">' . $paper_desc[$i] . '</p>
      </div>
      <div class="card-footer bg-light">
        <a href="' . $paper_link[$i] . '" class="btn btn-info">Open </a> 
        ' . $link2[$i] . ' 
      </div>
    </div>
  </div> ';
                } else if ($noresult && ($i == $iter)) {
                    echo '<div class="container mx-auto"  style="min-height:30vh; ">
        <div class="jumbotron jumbotron-fluid " >
        <div class="container">
          <h5 class="text-xl-left">No Result, Word not matched. </h1> </br>
          <p>Suggetions </p>
          <ul >
          <li>Please search with strong keyword related to this website</li>
         
          </ul>
        </div>
        </div >
      </div>
      ';
                }
            }

            ?>
        </div>
    </div>

    <div class="container my-4 ">
<?php
 $squery = $_GET['query'];
 echo '<h3 class="font-italic py-2 text-center"> Search results of BOOKS for <mark class="p-0 m-0 bg-warning ">' . $squery . '</mark> </h3> ';
?>
        <hr>

        <div class="row">
            <?php

            $sql = "SELECT * FROM `cse_books` ";
            $result = mysqli_query($conn, $sql);
            $iter=0;
            while ($row = mysqli_fetch_assoc($result)) {
                $iter++;     
                $paper_id[$iter] = $row['book_id'];
                $paper_sem[$iter] = $row['book_sem'];
                $paper_name[$iter] = $row['book_name'];
                $paper_desc[$iter] = $row['book_desc'];
                $paper_link[$iter] = $row['book_link'];
                $paper_notes_link[$iter] = $row['book_notes_link'];
                $paper_img[$iter] = $row['book_img'];
                $created[$iter] = $row['created'];

            }
           
            $noresult = true;
            for ($i = 1; $i <= $iter; $i++) {
                if ((preg_match(strtolower("/$squery/"), strtolower($paper_sem[$i])) || preg_match(strtolower("/$squery/"), strtolower($paper_name[$i])) || preg_match(strtolower("/$squery/"), strtolower($paper_desc[$i])) || preg_match(strtolower("/$squery/"), strtolower($paper_img[$i])))) {
                  
                    $noresult = false;
                    echo ' <div class="card-deck my-2 col-md-4">
    <div class="card">
    <div class="simgdiv">  <a href="'.$paper_link[$i].'">  <img src="image/'.$paper_img[$i].'" class="card-img-top pics" alt="..."> </a> </div>
      <div class="card-body">
        <h5 class="card-title">' . $paper_name[$i] . '</h5>
        <p class="card-text">' . $paper_desc[$i] . '</p>
      </div>
      <div class="card-footer bg-light">
        <a href="' . $paper_link[$i] . '" class="btn btn-info">Open </a> 
        ' . $link2[$i] . ' 
      </div>
    </div>
  </div> ';
                } else if ($noresult && ($i == $iter)) {
                    echo '<div class="container mx-auto"  style="min-height:30vh; ">
        <div class="jumbotron jumbotron-fluid " >
        <div class="container">
          <h5 class="text-xl-left">No Result, Word not matched. </h1> </br>
          <p>Suggetions </p>
          <ul >
          <li>Please search with strong keyword related to this website</li>
         
          </ul>
        </div>
        </div >
      </div>
      ';
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