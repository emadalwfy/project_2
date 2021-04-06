<?php

include_once "conect_db.php";

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
    <title>Add N new Post</title>
</head>
<body>
 <div class="row">
     <div class="col-sm-5">
     <form action="" method="post">
      <label for="title">   <h4> Add new title </h4></label><br>
       <input type="text" placeholder="add title" name='title' id="title" ><br>

     <label for="content">   <h4> Add new post </h4></label><br>
     <textarea name="content" id="" cols="30" rows="10"></textarea>

     <label for="content">   <h4> Add new img or vedio </h4></label><br>
         <input type="file"  name='img'><br>

         <label for="price"><h3>Add New Price</h3></label><br>
         <input type="text" placeholder="add price" name="price" id="price"><br>
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

     <input type="submit" name="save_post" id="submite" class="btn btn-info btn-md" value="Save Post">
</div>
 
 </div>
 </form>


    <!-- javascript files -->
   <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>