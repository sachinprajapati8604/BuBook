<?php
  session_start();
error_reporting(0);
include '../dbconnect.php';

$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM `admin` where admin_email='$email'";

$result=mysqli_query($conn,$sql);
//$row=mysqli_fetch_assoc($result);
while ($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fullname=$row['admin_name'];
    $admin_email=$row['admin_email'];
    $admin_pass=$row['admin_pass'];
    if(($email==$admin_email)&& ($pass==$admin_pass)){

      
        // Store data in session variables
        $_SESSION["admin_loggedin"] = true;
        $_SESSION["admin_id"] = $id;
        $_SESSION["admin_username"] = $admin_email;  
        $_SESSION["admin_fullname"] = $fullname;    

        header("location:home.php");
    }else{
        echo "<h1>incorrect information</h1>";
       
    }
}


 ?>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script>
        function SubmitForm() {
            document.LoginForm.submit();
            document.LoginForm.reset();

        }
    </script>

</head>

<body>

    
    <?php
    include 'dbconnect.php';
    ?>

    <div class="container my-4 mx-auto" style="max-width: 500px;">

        <form name="LoginForm" action="" method="POST">
    <h1 class="text-center">Admin Login</h1> <hr>
            <div class="form-floating mb-3 mt-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-group col-md-6 mt-4 mb-0">
                <button type="submit" class="btn btn-primary" id="btnsubmit" onclick="SubmitForm()">Submit</button>
            </div>
        </form>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>