<?php
include "db.php"
?>


<?php




$delete_query="DELETE FROM `articles`";

if(mysqli_query($connection,$delete_query)){
    echo "All articles deleted";
   
}
else{
    echo "Error:" . $text_query . "<br>" . mysqli_error($connection);
    echo  "sdsd".$article_id;
}
?>