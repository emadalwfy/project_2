<?php
include_once  'conect_db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all post</title>
</head>
<body>
<center>
    <h3>All  Page</h3>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name Page</th>
      <!-- <th scope="col">CONTENT</th>
      <th scope="col">IMG</th>
      <th scope="col">page_id</th>
      <th scope="col">cat_id</th>-->
      <th scope="col">EDIT</th>
      <th scope="col">DELET</th> 
    </tr>
  </thead>
  <tbody>
  <?php  while($row=mysqli_fetch_assoc($result_select_cat)) {?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <th scope="row"><?php echo $row['name_cat'] ?></th>
    

      <td><a href="?page=cat/edit_cat.php&id=<?php    echo $row['id'] ?>">Edit</a> </td>
      <td><a href="?page=cat/delet.php&id=<?php  echo $row['id'] ?>">delet</a> </td>
    </tr>
    <?php  }?>

  </tbody>
</table>
</center>
</body>
</html>