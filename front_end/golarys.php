<?php

include_once "../conect_db.php";


$select_posts_up="SELECT * FROM `posts`  WHERE page_id=2 ";
$result_select_posts_home=mysqli_query($coon,$select_posts_up);


$select_pages_up="SELECT * FROM `pages` ";
$result_select_pages_up=mysqli_query($coon,$select_pages_up);


$select_cats_up="SELECT * FROM `cat1`  ";
$result_select_cats_up=mysqli_query($coon,$select_cats_up);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/minhome.css">
    <title>home</title>
</head>
<body>
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg   navbar-deepskyblue bg-deepskyblue">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
          <?php while( $row=mysqli_fetch_assoc($result_select_pages_up) ){?>
            <li class="nav-item">
        <a class="nav-link" href="<?php  echo  $row['name_page'].'.php' ?>"><?php echo $row['name_page']  ?></a>
     
      </li>
      <?php  }?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
        <?php while( $row=mysqli_fetch_assoc($result_select_cats_up) ){?>
          <a class="dropdown-item" href="<?php  echo  $row['name_cat'].'.php' ?>"><?php echo $row['name_cat']  ?></a>
          <!-- <a class="dropdown-item" href="#">Another action</a> -->
          <?php  }?>
          <div class="dropdown-divider">
          </div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>  <!-- end nav bar  -->

<!-- jumbotron start -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <center>
    <h1 class="display-6"> WELCOME TO</h1>
    <p class="lead"> monitor project  central for all new </p>
          </center>
  </div>
</div>
  
<!-- stsrt posts  -->
<div class=container>
    <div class="row">
 
<?php while($row=mysqli_fetch_assoc($result_select_posts_home)){?>
    <div  class="col-lg-2.5 col-md-3  col-sm-4 col-xs-12  ">
        <div class="min_posts">
        <center>
   
        <a href="single_post.php?id=<?php echo  $row ['id'] ?>">
  <h3 class='title_homec_'><?php echo  $row ['title'] ?></h3></a><br>>

    <img src="../img/<?php  echo  $row['img']; ?>" alt="img">
    <p> <?php  echo  $row['content']; ?></p>
    <h4 style="color:blue;">price:<?php echo $row['price']  ?></h4>
</center>
</div>
</div>
<?php  }?>
    </div>
</div>


    <!-- js files -->
   <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>