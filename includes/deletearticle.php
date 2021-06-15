<?php
include "db.php"
?>


<?php

$article_id=$_GET['id'];


$text_query="DELETE FROM `articles` WHERE id=$article_id";

if(mysqli_query($connection,$text_query)){
    echo "Post deleted";
   
}
else{
    echo "Error:" . $text_query . "<br>" . mysqli_error($connection);
    echo  "sdsd".$article_id;
}
?>