
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/jpg" href="image/title.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BUBooks.com</title>

<style>
#outer{
height:300px;
width:400px;
border:1px solid;
margin:100px;
background-color:yellow;

}
body{
//background-image:url("https://images.pexels.com/photos/2720742/pexels-photo-2720742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
background-size:cover;
background-repeat:no-repeat;
}
.but{
color:#fff;
background-color:#00f;
width:100px;
}

.sac{
	float:left;
}

</style>

<script>
function SubmitForm()
{
document.FeedbackForm.submit();
document.FeedbackForm.reset();

}
</script>

</head>
<center>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">BUBooks.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
		
      </li>

	        <li class="nav-item">
        <a class="nav-link" href="bookmenu.html">Books-Menu</a>	
      </li>
	        <li class="nav-item">
        <a class="nav-link" href="papermenu.html">Papers-Menu</a>	
      </li>
	  
	        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="bookmenu.html">Books</a>
          <a class="dropdown-item" href="papermenu.html">Papers</a>
          <a class="dropdown-item" href="programmingBook.html">Programming Books</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="feedback.php">Give Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>	
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
		
      </li>
 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>







<br><br>
<div class="container mt-5 ">


<form name="FeedbackForm" action="feedinsert.php" method="POST">
  
				<div class="form-row">
                        <div class="form-group col-md-6 mx-auto">
                          <label for="inputEmail4" class="sac">Name</label>
                          <input type="text" name="na" class="form-control" id="name" placeholder="Name">
                        </div>
                </div>
               
			   <div class="form-row">
                  <div class="form-group col-md-6 mx-auto">
                    <label for="inputEmail4" class="sac">Email</label>
                    <input type="email" name="gm" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  </div> 
			   
			   
		
  <div class="form-group col-md-6 mx-auto">
    <label for="exampleFormControlTextarea1" class="sac"><b>Write Your Feedback</b></label>
    <textarea name="feedback" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <button type="button" class="btn btn-primary"  id="btnsubmit" onclick="SubmitForm()">Submit</button>
  
  
  
</form>


</div>
<!-- Footer -->
<footer class="blog-footer container">
      <div class="float-left my-2">Developed & Designed By <a href="https://www.facebook.com/bullet.raja.1998"></a> Sachin Prajapati <a href="https://www.instagram.com/prajapati_rangbaz?r=nametag">@sachin_prajapati</a>  </div>
      <div class="float-right">
        <a href="#">Back to top</a>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </center>
</html>