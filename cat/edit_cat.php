<?php


include_once  'conect_db.php';


$select_cat_up="SELECT * FROM `cat1`  WHERE id='".$_GET['id']."' ";
$result_select_cat_up=mysqli_query($coon,$select_cat_up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>add new page</title>
</head>
<body>
    <form action="" method="post">
    <center>
      <h3>Add new page</h3>

      <?php  if($row=mysqli_fetch_assoc($result_select_cat_up)) {  ?>
      <input type="text"  name="name_page" placeholder="enter name page" value="<?php echo $row['name_cat']  ?>" ><br>
<br>
    <?php  }?>
      <input type="submit" name="edit_cat"  value="save page" class="btn btn-info  btn-md">
    </center>
    </form>
</body>
</html>