<?php 
include "db.php";



//echo $_SESSION['haha'];
//print_r($_SESSION);
?>



<div class="wrapper col1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.php"><?php echo $config[title]; ?></a></h1>
      <p>Free Website Template</p>
    </div>
    <div class="fl_right" style="width: 200px; float:right">
   <ul >
 
   <?php
   @session_start();
   if($_SESSION['haha']==null){
?>
<li> <a style="color:white a.hover{color:black}"  href="../includes/login.php">Login </a>
 </li>
 <li><a style="color:white a.hover{color:black}"  href="../includes/register.php">Register </a></li>

<?php
   }
   else{
     ?>
       <li >
    <a href=""><?php echo  $_SESSION['haha']; ?></a>
    </li>

    
     <?php
   }
   ?>
  
  
   
   </ul>
   </div>
  </div>
</div>
<!-- ####################################################################################################### -->

 

