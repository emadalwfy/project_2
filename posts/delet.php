<?php

include 'conect_db.php';

$delet_post="DELETE FROM `posts` WHERE id='". $_GET['id'] ."'";
$query_delet=mysqli_query($coon,$delet_post);

if($query_delet){
    echo  "yes delet success fullly";
    header("location:?page=posts/all_post.php");
    }
else{
    echo mysqli_error($coon);
}