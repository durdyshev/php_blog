<?php 
@session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: PhotoFolio
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoFolio | Style Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
  *{
    font-family:'Poppins' !important;
     }
    
</style> 

</head>
<body id="top">
<div class="wrapper col1">
  <div id="header" class="clear">
  <?php include "../includes/header.php" ?>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->


<?php 
$id_number=$_GET['id'];
$query_text="SELECT * FROM articles WHERE id=$id_number";


$article_query=mysqli_query($connection,$query_text);
if(mysqli_num_rows($article_query)>0){
    while($row=mysqli_fetch_assoc($article_query)){
      
?>  
<div class="wrapper col2">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="content">
      <h1><?php echo $row['title']; ?></h1>
      <img  src=<?php echo $row['image'] ?> alt="" width="100%" height="" />
      <p style="font-size:17px">      <?php echo $row['text'];       ?>      </p>
      
 <?php   
$san=$row[views]+1;

$query_update=mysqli_query($connection,"UPDATE articles SET views=$san WHERE id=$id_number");
if($query_update){

}
else{
  echo "Error:" . $texto . "<br>" . mysqli_error($connection);
}
exec($query_update);


}
  }
 
 

?>    

<?php 
$id_number=$_GET['id'];
$query_comments="SELECT * FROM comments WHERE article_id=$id_number";
?>


      <div id="comments">
        <h2>Comments</h2>
        <ul class="commentlist" id="commentlist" >

        <?php $comments_query=mysqli_query($connection,$query_comments);
if(mysqli_num_rows($comments_query)>0){
    while($comment_row=mysqli_fetch_assoc($comments_query)){?>

<li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#"><?php echo $comment_row['username'] ?></a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#"><?php echo $comment_row['pubdate'] ?></a></div>
            <p> <?php echo $comment_row['text'] ?>
            </p> </li>
    <?php

    }
  }
      
?>  
         
          <!--
            <li class="comment_even">
            <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>

          -->
         
        </ul>
      </div>
      <h2>Write A Comment</h2>
      <div id="respond">
        
       
         
      
      </div>
    </div>


<script>
function resetform(){
  document.getElementById("comment").value="";
}


function submit_form(id){
  
  const text=document.getElementById("comment").value;

  console.log(text);
                           if(text===""){
                            alert("Fill in the blanks");
                           }
                           else{
                             
                            
                            ajaxo(id,text);
                           }
                          

}
function ajaxo(str,text){

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("commentlist").innerHTML += this.responseText;
    
    document.getElementById("comment").value=""
    console.log(this.responseText);
  }
};


xmlhttp.open("GET","../includes/submitform.php?id="+str+"&text="+text,true);
xmlhttp.send();


}

</script>




<?php 
include "../includes/sidebar.php";
?>


<?php
if($_SESSION['haha']==null){
  $session_tekst="document.getElementById('respond').innerHTML= '<button type=button ><a href=../includes/login.php>Login</a>  </button>'";
echo "<script>".$session_tekst . "</script>";
}
else{
  $session_comment="document.getElementById('respond').innerHTML='<p><textarea name=comment id=comment cols=100% rows=10></textarea><label for=comment style=display:none;><small>Comment (required)</small></label></p><p> <input name=submit onclick=submit_form($id_number) type=submit id=submit value=Submit Form /> &nbsp;  <input name=reset onclick=resetform() type=reset id=reset tabindex=5 value=Reset Form /></p>'";
//echo $session_comment;

echo "<script>" . $session_comment . "</script>";
}
?>
    
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <div class="footbox">
      <h2>About Us</h2>
      <p>Lornunc tincidunt nec nequat risus convallisis elit vestiquat justo et volutpat. Urnanec monterdum turistibus semportis non vivamus justo pellus ac integestiquat eros. Turet cursuspend ero nulla dapienteger quisque nullamcorper lorem in ut pellus.</p>
      <p>Atmaecenas nec non nam nullamcorper magna id id nisl ac in. Sedfauctortis fuscetus estibus gravida id dui curabitur commodo facilisi loborttitorttitor vitae.</p>
    </div>
    <div class="footbox">
      <h2>Our Skillset</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit</a></li>
        <li><a href="#">Amet consectetur</a></li>
        <li><a href="#">Praesent vel sem id</a></li>
        <li><a href="#">Curabitur hendrerit est</a></li>
        <li><a href="#">Aliquam eget erat nec sapien</a></li>
        <li><a href="#">Cras id augue nunc</a></li>
        <li><a href="#">In nec justo non</a></li>
        <li><a href="#">Vivamus mollis enim ut</a></li>
        <li class="last"><a href="#">Sed a nulla urna</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Blog Links</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit</a></li>
        <li><a href="#">Amet consectetur</a></li>
        <li><a href="#">Praesent vel sem id</a></li>
        <li><a href="#">Curabitur hendrerit est</a></li>
        <li><a href="#">Aliquam eget erat nec sapien</a></li>
        <li><a href="#">Cras id augue nunc</a></li>
        <li><a href="#">In nec justo non</a></li>
        <li><a href="#">Vivamus mollis enim ut</a></li>
        <li class="last"><a href="#">Sed a nulla urna</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Keep in Touch</h2>
      <ul>
        <li><a href="#">Check out our Facebook page</a></li>
        <li><a href="#">Get the latest Tweets</a></li>
        <li><a href="#">Grab our latest Deviants</a></li>
        <li><a href="#">View our LinkedIn profile</a></li>
      </ul>
      <h2>Contact Us</h2>
      <ul>
        <li><strong class="title">Tel:</strong><br />
          xxxxx xxxxxxxxxx</li>
        <li><strong class="title">Email:</strong><br />
          <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
</body>
</html>