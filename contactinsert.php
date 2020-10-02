
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/jpg" href="image/title.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style>
body {

    color: #6610f2;
    text-align: center;

}
</style>
</head>
<body>


<!-- including navbar -->
<?php 
include "basic/navbar.php";
?>


<?php
// including function file of connection which is stored as Connection.php in same folder

include("Connection.php");
 
 // creating variable to get data
$name=$_POST['name'];
$reason=$_POST['reason'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$details=$_POST['details'];


$query= "INSERT INTO `contactus` VALUES ('$name','$reason','$email','$password','$address','$city','$state','$zip','$details')";


$data=mysqli_query($conn,$query);

if($data)
{
	echo "<br>"."<br>"."<br>";
	
	echo "<h4>Thank you ! " .$name ." our team will resolve your problem soon.</h4>";
}
else
{
	echo "<br>"."<br>"."<br>";
	
	echo "Error to send ";
}

?>




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






