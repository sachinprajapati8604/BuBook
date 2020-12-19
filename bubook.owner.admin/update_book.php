<?php
session_start();
// Check if the user is logged in, if not then redirect him to loginhandle page
if (!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true) {
  header("location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">

<title>BUBooks.com</title>
  <link rel="shortcut icon" type="image/jpg" href="../image/title.jpg" />

  <link rel="stylesheet" href="css/style.css">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'basic/navbar.php'; ?>

  
  <?php

  include 'dbconnect.php';
 
  if (count($_FILES) > 0) {

    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {

      require_once "dbconnect.php";
      //variable for storing the images in folder and database
      $filename = $_FILES["userImage"]["name"];

      $tempname = $_FILES["userImage"]["tmp_name"];
    
      $folder = "../image/" . $filename;

      //variable to store image data and type in database
           $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
          $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

      

      //getting variable data from form by post method
      
$book_id=$_GET['book_id'];
      $book_sem = $_POST['sem'];
      $book_title = $_POST['title'];
      $book_detail = $_POST['detail'];
      $book_link1 = $_POST['link1'];
      $book_link2 = $_POST['link2'];
      $book_title=mysqli_real_escape_string($conn,$book_title);
      $book_detail=mysqli_real_escape_string($conn,$book_detail);
      $book_link1=mysqli_real_escape_string($conn,$book_link1);
      $book_link2=mysqli_real_escape_string($conn,$book_link2);

      $sql="UPDATE `cse_books` SET  `book_sem`='$book_sem',`book_name`='$book_title',`book_desc`='$book_detail',`book_link`='.$book_link1.',`book_notes_link`='.$book_link2.',`book_img`='{$filename}',`created`=current_timestamp() where book_id='$book_id' ";

      $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));


      $showalert = true;

      // Now let's move the uploaded image into the folder: image 
      if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
      } else {
        $msg = "Failed to upload image";
      }


      if ($showalert) {
        echo '
        <script>
      swal({
        title: "Record Updated Successfully",
        icon: "success"
    }).then(function() {
        window.location = "view_book.php";
    }); </script>';
                
      } else {
        $showalert = "Somthing went wrong";
      }
    }
  }

  ?>

  <?php

include 'dbconnect.php';

$book_id=$_GET['book_id'];
$sql = "SELECT * FROM `cse_books` where book_id='$book_id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $book_sem = $row['book_sem'];
  $book_name = $row['book_name'];
  $book_desc = $row['book_desc'];
  $book_link = $row['book_link'];
  $book_notes_link = $row['book_notes_link'];
  $book_img = $row['book_img'];
  $created = $row['created'];
  

     echo ' <div class="container my-4 border shadow-sm" style="max-width: 800px;">
 <h2 class="text-center h1-heading">UPDATE BOOKS</h2>
   <form action="" method="post" enctype="multipart/form-data">
     <p class="mb-3 font-weight-normal text-center p-heading">Upload books here </p>
     <hr>
     <div class="form-group">   <label for="title">Choose semester<sup class="font-weight-bold" style="color: red;">*</sup></label>

     <select  name="sem" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
   <option selected></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   <option value="6">6</option>
   <option value="7">7</option>
   <option value="8">8</option>
 </select>
 <small>Book uploaded for <b>'.$book_sem.'</b> semester.</small>
     </div>
     <div class="form-group">
       <label for="title"> Book Title<sup class="font-weight-bold" style="color: red;">*</sup></label>
       <input value="'.$book_name.'" type="text" class="form-control" id="title" name="title" aria-describedby="title" required />
       <small id="title" class="form-text text-muted">please use as short as possible.</small>
     </div>
     <div class="form-group">
   <label for="exampleFormControlTextarea1">Book Details</label>
   <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3">'.$book_desc.'</textarea>
 </div>
     <div class="form-group ">   
         <label for="price">Google drive link<sup class="font-weight-bold" style="color: red;">*</sup></label>
         <input value="'.$book_link.'" type="text" class="form-control" id="price" name="link1" required />
       </div>
       <div class="form-group ">
         <label for="bidprice">Google drive Link  for easy note (optional)</label>
         <input value="'.$book_notes_link.'" type="text" class="form-control" id="bidprice" name="link2" aria-describedby="title"  />

       </div>

     <div class="form-group mt-4">
     <h5>Upload Book Image</h5>
       <label for="exampleFormControlFile1"> Image 1 <sup class="font-weight-bold" style="color: red;">*</sup></label>
       <input type="file" class="form-control-file" id="exampleFormControlFile1" name="userImage" required />
       <small>Image saved as  '.$book_img.' </small>
     </div>

       <button type="submit" name="submit" class="btn btn-primary my-4 btn-block ">Submit</button>
     
    
   </form>
 </div>

';
    }
 
  ?>

  

 
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <!--Get your own code at fontawesome.com-->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</body>
 </html>