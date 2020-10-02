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


        <div class="alert alert-danger mx-auto my-auto " role="alert">
            Check out Corona Virus (COVID-19) cases in India 👉 <a href="https://www.worldometers.info/coronavirus/country/india/" class="btn btn-info mx-auto mx-auto" target="_blank">click here</a>
        </div>

        <div class="alert alert-info mx-auto" role="alert">
            <?php
            $var = date("d-m-Y , l,");

            echo  " <b> Today is  $var </b>";

            ?>
        </div>

    </div>
    <div class="container mt-3">
        <div class="jumbotron ">
            <h2 class="display-4" style="text-align:justify;">Welcome!</h2>
            <p class="lead" style="text-align:justify; ">I love books and I love the internet, which means I'm always
                looking for great sites about books. If you're reading this, you're probably the same way. The great
                news is that there's also a huge online literary community to explore. Every site has its own flavor and
                its own pizzaz. There's plenty of fun, diverse ways that you can engage with writing and reading.
                Whether you like reading about writing, reading about reading, or you just want something new to read,
                there's plenty of options for you out there.</p>
            <hr class="my-2">
            <p style="text-align:justify;">Here is something magical about reading books. This website cover all the
                books pdf for Student of BUNDELKHAND UNIVERSITY JHANSI for B.Tech(CSE) Student. There are many books out
                there.<p>

                    <button type="button" class="btn btn-outline-success mt-2 mx-auto " data-toggle="modal" data-target="#exampleModal">
                        click here to download our android app

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

    <!-- Making Card for adding books -->
    <div class="container my-2">
        <h4 class="text-center border my-3 font-weight-bold">Books-5th Semester ,3rd year(CSE) </h4>
        <div class="row">
            <div class="col-md-4 my-2 ">
                <div class="card mx-auto" style="width: 18rem;min-height:27rem;">
                    <img src="image/daa.png" class="img-thumbnail mt-2 pics" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">DAA By Coremen</h5>
                        <p class="card-text">Introduction to Algorithms Third Edition,Thomas H. Cormen
                            Charles E. Leiserson
                            Ronald L. Rivest
                            Clifford Stein</p>
                        <a href="https://drive.google.com/open?id=11zOmaAELFVzyEnx53ss7bOHTrTX2SOJo" class="btn btn-primary ">Open Book</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2 ">
                <div class="card mx-auto" style="width: 18rem; min-height:27rem;">
                    <img src="image/cd.png" class="img-thumbnail mt-2 pics" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">CompilerDesign</h5>
                        <p class="card-text"> By S. D. Ullman,We hope
                            to make available the notes for each offering of compiler-related courses.</p> <br>
                        <a href="https://drive.google.com/open?id=11WRXiSAwnSL_QCqvVYZB00v2m1KQ1Mwt" class="btn btn-primary">Open Book</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2  ">
                <div class="card mx-auto" style="width: 18rem;min-height:27rem;">
                    <img src="image/cg.png" class="img-thumbnail mt-2 pics" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title " id="harry">Computer Graphics </h5>
                        <p class="card-text">This is a PDF version of a free on-line book that is available at ......
                            computer graphics, which would typically be taken by a computer science student in the third.
                        </p>
                        <a href="https://drive.google.com/open?id=1O1VXY6iOkltOv2BTzQ8hkDOA8S-30nj8" class="btn btn-primary">Open Book</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2  ">
                <div class="card mx-auto" style="width: 18rem;min-height:27rem;">
                    <img src="image/ppl.png" class="img-thumbnail mt-2 pics" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">PPL</h5>
                        <p class="card-text">PPl Book & notes </p>
                        <a href="https://drive.google.com/file/d/1MgArtBgJDVSGpM3ptEZ2k-SLr1Ymnz6h/view?usp=sharing" class="btn btn-primary">Open Notes</a> <br> <br>

                        <a href="https://drive.google.com/open?id=1O0UQTp-fa8ly9bknXbCLKlJ0EpZnd7q-" class="btn btn-primary">Open Book</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2 ">
                <div class="card mx-auto" style="width: 18rem;min-height:27rem;">
                    <img src="image/iepm.jpeg" class="img-thumbnail mt-2 pics" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title" id="harry">IEPM </h5>
                        <p class="card-text"> IEPM book<p>
                                <a href="https://drive.google.com/file/d/1LXhKUthTQ1fMNJYF7Izu6OPQPKFTp8O8/view?usp=sharing" class="btn btn-primary">Open Book</a>
                    </div>
                </div>

            </div>

        </div>
    </div>




    <br>
    <div class="container">
        <div class="alert alert-info mx-auto" role="alert">
            <b> For more click on menu items 👇</b>
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

        <div class="p-4">
            <h5 class="font-italic font-weight-bold">Write to us </h5>
            <a class="btn btn-info btn-block font-weight-bold p-2 mt-3 mx-auto" type="button" href="feedback.php">Feedback</a>

        </div>

    </div>
    </div>

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