<?php
include 'db.php';?>


<?php
@session_start();


//echo "Haydo";
$numb= $_GET['id'];
$username=$_SESSION['haha'];
$text=$_GET['text'];

$texto="INSERT INTO `comments` (`username`,`text`,`article_id`) VALUES ('$username','$text',$numb)";
/*echo $text;

echo '<br>';
echo  $numb+2;
echo $numb;*/


if(mysqli_query($connection,$texto)){
   

   ?>       <li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#"><?php echo $username ?></a></span> <span class="wrote">wrote:</span></div>
           <p> <?php echo $text?>
            </p> </li>
<?php
}
else{
    echo "Error:" . $texto . "<br>" . mysqli_error($connection);
}


?>











