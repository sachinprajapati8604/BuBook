<?php 
echo '<!-- adding navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<img src="image/title.jpg" height="30" class="d-inline-block align-top mr-2"
alt="clan logo"> 
  <a class="navbar-brand mynav" href="#">BUBooks.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     

	        <li class="nav-item">
        <a class="nav-link" href="bookmenu.php">Books-Menu</a>	
      </li>
	        <li class="nav-item">
        <a class="nav-link" href="papermenu.php">Papers-Menu</a>	
      </li>
	  
	        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="bookmenu.php">Books</a>
          <a class="dropdown-item" href="papermenu.php">Papers</a>
		  <a class="dropdown-item" href="syllabus.php">Syllabus</a>
		  <a class="dropdown-item" href="programmingBook.php">Programming Books</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="feedback.php">Give Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>	
      </li>
 <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
		
      </li>
 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  onclick="search()">Search</button>
    </form>
  </div>
</nav>';
?>

<script>
function search()
{

window.alert(" Sorry 🙏 \n This search funtion is under developing \n until please find manually \n Thank You ");
}
</script>