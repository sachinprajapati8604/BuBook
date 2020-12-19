<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="image/title.jpg" />
    <title>BUBooks.com</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- ----Font family------->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- including navbar -->
    <?php
    include "basic/navbar.php";
    ?>


    <!-- alert -->
    <div class="container-fluied ">

        <div class="alert alert-success alert-dismissible fade show my-auto">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Student!</strong> Here You can read and downloads books and papers please submit your feedback by
            exploring the menu
        </div>

    </div>
    <div class="container mt-3">
        <div class="jumbotron pb-1 pt-3">
            <h2 class="display-4" style="text-align:justify;">Welcome!</h2>
            <p class="lead jumbotext" style="text-align:justify; ">I love books and I love the internet, which means I'm always
                looking for great sites about books. If you're reading this, you're probably the same way. The great
                news is that there's also a huge online literary community to explore. Every site has its own flavor and
                its own pizzaz. There's plenty of fun, diverse ways that you can engage with writing and reading.
                Whether you like reading about writing, reading about reading, or you just want something new to read,
                there's plenty of options for you out there.</p>
            <hr class="my-2">
            <p style="text-align:justify;">Here is something magical about reading books. This website cover all the
                books pdf for Student of BUNDELKHAND UNIVERSITY JHANSI for B.Tech(CSE) Student. There are many books out
                there.<p>

                    <button type="button" class="btn btn-outline-success mt-2 mx-auto d-flex" data-toggle="modal" data-target="#exampleModal">
                     <i class="fa fa-download" aria-hidden="true">  Download our App</i>

                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Welcome to BUBooks.com</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5> Covid-19 updater app <a href="https://drive.google.com/open?id=1mvFiBYVUCeMGZpsWF3hlTWSgOkoetrhT" class="btn btn-primary mx-auto float-right">Download</a> </h5> <br>

                                    <h5> BUBooks app <a href="https://drive.google.com/open?id=1mzAw-JpYcirNPLUWD5snF3J8WepzfuVX" class="btn btn-primary mx-auto float-right">Download</a> </h5> <br>


                                    <h4>Thank you ! for visit us.</h4>
                                    <hr>
                                    <p>Give us your feedback by clicking , services--> Give feedback
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>


    <div class="container my-2">
        <div class="alert alert-info mx-auto" role="alert">
            <b> Quick Access  👇</b>
        </div>

        <div class="p-4">
            <h4 class="font-italic font-weight-bold">Menu</h4>
            <ol class="list-unstyled mb-0">
                <li><a class="dropdown-item " href="bookmenu.php">👉Books</a> </li>
                <li><a class="dropdown-item " href="papermenu.php">👉Papers</a></li>
                <li><a class="dropdown-item" href="programmingBook.php">👉Programming books</a></li>
                <li><a class="dropdown-item" href="syllabus.php">👉Syllabus</a></li>

            </ol>
        </div>

       

    </div>
    </div>


   <!-- including books for 5th semester...... -->
 <div class="container my-4">
  <div class="bg-info ">
<h3 class="container my-3 p-3">Books-5th Semester  3rd year(CSE)</h3>
 </div> <hr>
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




    <br>

    
    <!-- including footer -->
    <?php
    include "basic/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>