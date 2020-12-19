
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/jpg" href="image/title.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BUBooks.com</title>

    <link rel="stylesheet" href="css/style.css">
<

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

<!-- including navbar -->
<?php 
include "basic/navbar.php";
?>



<div class="container my-3 " style="min-height: 60vh;">


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
  </center>
</html>