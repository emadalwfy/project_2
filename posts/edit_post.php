<?php

include_once "conect_db.php";



$select_posts_up="SELECT * FROM `posts`  WHERE id='".$_GET['id']."' ";
$result_select_posts_up=mysqli_query($coon,$select_posts_up);

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
    <title>edit N new Post</title>
</head>
<body>
 <div class="row">
     <div class="col-sm-5">
     <form action="" method="post">
    
     <?php  if($row=mysqli_fetch_assoc($result_select_posts_up)) {  ?>
      <label for="title">   <h4> edit title </h4></label><br>
       <input type="text" placeholder="add title" name='title' id="title" value="<?php echo  $row['title'] ;  ?>" ><br>

     <label for="content">   <h4> edit new post </h4></label><br>
     <textarea name="content" id="" cols="30" rows="10"  value="<?php echo  $row['content'] ;  ?>"></textarea>

     <label for="content">   <h4> edit new img or vedio </h4></label><br>
         <input type="file"  name='img' value="<?php echo  $row['img'] ;  ?>"><br>

         <label for="price"><h3>edit New Price</h3></label><br>
         <input type="text" placeholder="add price" name="price" id="price" value="<?php echo  $row['price'] ;  ?>"><br>
     </div><!--  col 1    -->
<div  class="col-sm-3 ">
     <label for="page"><h3>Add to Page</h3></label><br>
         <?php  while($row=mysqli_fetch_assoc($result_select_page)){ ?>
         <label for="page"><h4><?php echo $row['name_page'] ?></h4></label>
     <input type="checkbox" name="page_opstion[]" id="page" value="<?php echo $row['id'] ?>"><br>

     <?php  }?>

     <label for="cat"><h3>Add to Category</h3></label>
    
         <?php  while($row=mysqli_fetch_assoc($result_select_cat)){ ?>
         
            <label for="page"><h4><?php echo $row['name_cat'] ?></h4></label>
     <input type="checkbox" name="cat_opstion[]" id="cat" value="<?php echo $row['id'] ?>"><br>
         <?php  }?>
     <br><br>

     <input type="submit" name="save_post_update" id="submite" class="btn btn-info btn-md" value="Save Post">
</div>
 <?php  } ?>
 </div>
 </form>


    <!-- javascript files -->
   <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>