<?php

include 'conect_db.php';

$delet_page="DELETE FROM `cat1` WHERE id='". $_GET['id'] ."'";
$query_delet=mysqli_query($coon,$delet_page);

if($query_delet){
    echo  "yes delet success fullly";
    header("location:?page=cat/all_cat.php");
    }
else{
    echo mysqli_error($coon);
}