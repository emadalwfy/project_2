<?php

include  "conect_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/min.css">
    <title>index</title>
</head>
<body>
    <!--start  nav gation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    
      <li class="nav-item active">
        <a class="nav-link" href="front_end/home.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="li_aside1  dropdown">
<div class="dropdown">
  <button class="dropbtnnavpo">POSTS</button>
  <div class="dropdown-menu">
    <a href="?page=posts/add_new_post.php">add new post</a>
    <a href="?page=posts/all_post.php"> all pst </a>
    <!-- <a href="?page=posts/edit_post.php"> all pst </a> -->
 
  </div>
</div>
</li>
        <li class="li_aside2  dropdown">
<div class="dropdown">
  <button class="dropbtnnav">PAGES</button>
  <div class="dropdown-menu">
    <a href="?page=pages/add_new_page.php">add new page</a>
    <a href="?page=pages/all_page.php"> all pages </a>
   
  </div>
</div>
</li>
<li class="li_aside3  dropdown">
<div class="dropdown">
  <button class="dropbtnnav">CATEGORICE</button>
  <div class="dropdown-menu">
    <a href="?page=cat/add_new_cat.php">add category</a>
    <a href="?page=cat/all_cat.php"> all category </a>
  
  </div>
</div>
</li>
<li class="li_aside3  dropdown">
<div class="dropdown">
  <button class="dropbtnnav">USERS</button>
  <div class="dropdown-menu">
    <a href="#"> users admin</a>
    <a href="#"> users clints </a>
    
  </div>
</div>
</li>
<li class="li_aside3  dropdown">
<div class="dropdown">
  <button class="dropbtnnav">SETTINGS</button>
  <div class="dropdown-menu">
    <a href="#"> puplic</a>
    <a href="#"> property </a>
    
  </div>
</div>
</li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" 
        aria-haspopup="true" aria-expanded="false">
        
        <button class="dropbtnnavd">dropdown</button>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- start aside bar -->
<div class='row'>
<div class="col-sm-2">
<aside  class="d-none d-lg-block">
<div class="containe">
<!-- <div class='row'>
<div class="col-sm-3"> -->
<ul class="ul_aside">
<li class="li_aside1  dropdown">
<div class="dropdown">
  <button class="dropbtn">POSTS</button>
  <div class="dropdown-menu">
    <a href="?page=posts/add_new_post.php">add new post</a>
    <a href="?page=posts/all_post.php"> all pst </a>
    <!-- <a href="?page=posts/edit_post.php"> all pst </a> -->
 
  </div>
</div>
</li>
<li class="li_aside2  dropdown">
<div class="dropdown">
  <button class="dropbtn">PAGES</button>
  <div class="dropdown-menu">
   
  <a href="?page=pages/add_new_page.php">add new page</a>
    <a href="?page=pages/all_page.php"> all pages </a>
   
  </div>
</div>
</li>
<li class="li_aside3  dropdown">
<div class="dropdown">
  <button class="dropbtn">CATEGORICE</button>
  <div class="dropdown-menu">
    <a href="?page=cat/add_new_cat.php">add new category</a>
    <a href="?page=cat/all_cat.php"> all category </a>
  
  </div>
</div>
</li>
</li>
<li class="li_aside3  dropdown">
<div class="dropdown">
  <button class="dropbtn">USERS</button>
  <div class="dropdown-menu">
    <a href="#"> users admin</a>
    <a href="#"> users clints </a>
    
  </div>
</div>
</li>
<li class="li_aside3  dropdown">
<div class="dropdown">
  <button class="dropbtn">SETTINGS</button>
  <div class="dropdown-menu">
    <a href="#"> puplic</a>
    <a href="#"> property </a>
    
  </div>
</div>
</li>
</ul>
</aside>
</div><!--  col aside  -->
<div class="col"> 
<?php
  if(isset($_GET['page'])){
    $url=$_GET['page'];
    if(is_file($url)){
      include_once $url;
    }else{
      echo  "the page not found";
    }
  }
?>
</div>
</div><!--  row  -->
</div><!--  container  -->

<!-- end aside bar -->
    <!-- end nav gation -->
   <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>