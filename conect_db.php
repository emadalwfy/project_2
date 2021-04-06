<?php  
//  include_once "front_end/cooki.php";
//  conection data
$host="localhost";
$user="root";
$pass="";
$db="monitor_project2";

$coon=mysqli_connect($host,$user,$pass,$db) or die (mysqli_error());

if($coon){
    // echo "yes conecting";
}
// ////////session  //////////////
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/min.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();

$_SESSION['insert']='insert post succes fully';
// ////////////////////// SELECT ALL PAGES///////////////////////////////
$select_page="SELECT * FROM `pages` ";
$result_select_page=mysqli_query($coon,$select_page);


// ////////////////////// SELECT ALL CATEGORY///////////////////////////////
$select_cat="SELECT * FROM `cat1` ";
$result_select_cat=mysqli_query($coon,$select_cat);



// ////////////////////// SELECT ALL CATEGORY///////////////////////////////
$select_posts="SELECT * FROM `posts` ";
$result_select_posts=mysqli_query($coon,$select_posts);

// ///  INSERT Post  ///////////////////////////////
 

if(isset($_POST['page_opstion']) & isset($_POST['cat_opstion'])){
   $page_options=$_POST['page_opstion'];
   $cat_options=$_POST['cat_opstion'];
    
   foreach($page_options as $key => $value){
       foreach($cat_options as $key2 => $value2){
       
        if(isset($_POST['save_post'])){
         
            $title=$_POST['title'];
            $content=$_POST['content'];
            $img=$_POST['img'];
            $price=$_POST['price'];
           
                
           if(empty($title) || empty($content) || empty($img) || empty($price)){
               echo "place require data in all column";
           }else{
            $inser_post="INSERT INTO `posts`( `page_id`, `cat_id`, `title`, `content`, `img`, `price`) VALUES
             ('$value','$value2','$title','$content','$img','$price')";

            $query_insert=mysqli_query($coon,$inser_post);
            if($query_insert){
                echo "<h3 class='h3inser'>". $_SESSION['insert']  ."</h3>";
            }else{
                echo 'noo insert becouse'. mysqli_error($coon);
            }
        }

       }}
    }}else{
        // echo  "must select page or category";
    }

    // ///  Update Post  ///////////////////////////////
 
    
    if(isset($_POST['page_opstion']) & isset($_POST['cat_opstion'])){
        $page_options=$_POST['page_opstion'];
        $cat_options=$_POST['cat_opstion'];
         
        foreach($page_options as $key => $value){
            foreach($cat_options as $key2 => $value2){
            
             if(isset($_POST['save_post_update'])){
              
                 $title=$_POST['title'];
                 $content=$_POST['content'];
                 $img=$_POST['img'];
                 $price=$_POST['price'];
                
                 
    $select_posts_up="SELECT * FROM `posts`  WHERE id='".$_GET['id']."' ";
    $result_select_posts_up=mysqli_query($coon,$select_posts_up);
    
                if(empty($title) || empty($content) || empty($img) || empty($price)){
                    echo "place require data in all column";
                }else{
                 $update_post="UPDATE `posts` SET `page_id`='$value',`cat_id`='$value2',`title`='$title'
                 ,`content`='$content',`img`='$img',`price`='$price' WHERE id='". $_GET['id'] ."'";
     
                 $query_update=mysqli_query($coon,$update_post);
                 if($query_update){
                     echo "update post success fully";
                 }else{
                     echo 'noo update becouse'. mysqli_error($coon);
                 }
             }
     
            }}
         }}else{
            //  echo  "must select page or category";
         }
         
        //  /////////////////insert  page/////////////////
        if(isset($_POST['add_new_page'])){
            $name_page=$_POST['name_page'];

            $insert_page="INSERT INTO `pages`( `name_page`) VALUES ('$name_page')";
              $query_insert_page=mysqli_query($coon,$insert_page);

              if($query_insert){
                  echo  "insert pgae success fully";
              }else{
                  echo mysqli_error($coon);
              }
        }

        // ///////////////edit page //////////////////
        if(isset($_POST['edit_page'])){
            $name_page=$_POST['name_page'];

            $insert_page="UPDATE `pages` SET `name_page`=$name_page  WHERE id='".$_GET['id']."' ";
              $query_insert_page=mysqli_query($coon,$insert_page);

              if($query_insert){
                  echo  "update pgae success fully";
              }else{
                  echo mysqli_error($coon);
              }
        }

                //  /////////////////insert  Category/////////////////
                if(isset($_POST['add_new_cat'])){
                    $name_cat=$_POST['name_cat'];
        
                    $insert_page="INSERT INTO `cat1`( `name_cat`) VALUES ('$name_page')";
                      $query_insert_page=mysqli_query($coon,$insert_page);
        
                      if($query_insert_page){
                          echo  "insert category  success fully";
                      }else{
                          echo mysqli_error($coon);
                      }
                }
        
                // ///////////////edit Category //////////////////
                if(isset($_POST['edit_cat'])){
                    $name_page=$_POST['name_page'];
        
                    $insert_category="UPDATE `cat1` SET `name_cat`=$name_page  WHERE id='".$_GET['id']."' ";
                      $query_insert_cat=mysqli_query($coon,$insert_category);
        
                      if($query_insert_cat){
                          echo  "update category success fully";
                      }else{
                          echo mysqli_error($coon);
                      }
                }

   ////////////  // search files ///////////////////////
   if(isset($_POST['sub_search'])){
       $search=$_POST['search'];

       $query_search="SELECT * FROM `posts` WHERE title  LIKE '% $search%'";
       $sql_search=mysqli_query($coon,$query_search);

       if($sql_search){
        //    echo "yes success fully  search";
       }else{
           echo mysqli_error($coon);
       }
   }
// /////// COMMENTS SINGLE POST////////////////////////
if(isset($_POST{"save_comment"})){
    $user_name=$_POST['username'];
    $user_email=$_POST['user_email'];
    $coment_user=$_POST['coment_user'];

    $inser_comment="INSERT INTO comments (`text_comment`, `user_name`, `user_email`, `post_id`) 
    VALUES ('$coment_user','$user_name','$user_email','". $_GET['id'] ."')";

    $query_comment=mysqli_query($coon,$inser_comment);

    if($query_comment){
        echo  "insert comment succes fully";
    }else{
        echo  mysqli_error($coon);
    }

}

session_unset();