
  <?php
echo  '
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<a class="navbar-brand mx-2" href="home.php">Admin Panel</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="add_books.php">Upload Books <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="add_papers.php">Upload Papers <span class="sr-only"></span></a>
  </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Uploaded Books
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="view_book.php">CSE Books</a>
        <a class="dropdown-item" href="view_papers.php">CSE Books</a>
       

    </li>
    
  </ul>
</div>
</nav>';
?>