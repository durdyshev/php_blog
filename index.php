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
<title>PhotoFolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
  *{
    font-family:'Poppins' !important;
     }
     a:hover{
      color:black !important;
    }
</style> 

<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- tabs -->
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#tabcontainer").tabs({
        event: "click"
    });
});
</script>
<!-- / tabs -->
<script type="text/javascript" src="layout/scripts/jquery-photostack.js"></script>
<!-- coinslider -->
<script type="text/javascript" src="layout/scripts/jquery-coin-slider.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#portfolioslider').coinslider({
        width: 480,
        height: 280,
        navigation: false,
        links: false,
        hoverPause: true
    });
});
</script>
<!-- / coinslider -->
</head>
<body id="top">
<div class="wrapper col1">
<?php  

require 'includes/header.php';

?>
</div>
<!-- ####################################################################################################### -->
<?php 
$categories_articles_query=mysqli_query($connection,"SELECT * FROM `articles` ORDER BY `pubdate` DESC LIMIT 10");
$categories_articles=array();
while($categories_article=mysqli_fetch_assoc($categories_articles_query)){
  $categories_articles[]=$categories_article;
}
?>

<div class="wrapper col1">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <div id="slider">
      <ul id="categories">
      <?php 
    
    foreach($categories_articles as $articles){
        ?>
        
        <li class="category">
        <h2><a style="color:#DFDFDF" href="/pages/style-demo.php?id=<?php echo $articles['id'] ?>"><?php echo mb_substr($articles[title],0,50,'utf-8') ?></a></h2>  
        <a href="/pages/style-demo.php?id=<?php echo $articles['id'] ?>"><img src=<?php echo $articles[image] ?> alt=""></a>
        <p> <?php echo mb_substr($articles[text],0,125,'utf-8') ?></p>
        <p class="readmore"><a href="/pages/style-demo.php?id=<?php echo $articles['id'] ?>">Read More &raquo;</a></p>
      
      </li>

<?php
    }
    
    ?>   
      
     
      
       </ul>
      <a class="prev disabled"></a> <a class="next disabled"></a>
      <div style="clear:both"></div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col2" id="col2">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    
    <div id="tabcontainer">

    <?php 
    require "includes/header2.php"
    
    ?>
    <!--  <ul id="tabnav">


       <li><a href="#tabs-1">Our Services</a></li>
        <li><a href="#tabs-2">Latest Projects</a></li>
        <li><a href="#tabs-3">Portfolio Example</a></li>
        <li><a href="#tabs-4">Full Width Content</a></li>
        <li><a href="#tabs-5">2 Column Content</a></li> 


      </ul>
  -->
     <div id="tabs-1" class="tabcontainer">
        <div id="hpage_services" class="clear" style="align-items:center">
          
        </div>
      </div>
 
      <!-- ########### -->
    
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <?php 
  include_once "includes/footer.php";
  ?>
</body>

</html>