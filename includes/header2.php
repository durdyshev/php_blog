<?php 
$categories_query=mysqli_query($connection,"SELECT * FROM `articles_categories`");
$categories=array();
while($cat=mysqli_fetch_assoc($categories_query)){
  $categories[]=$cat;
}
?>




<div id="topbar" class="clear">

    <ul id="topnav">

    
    <?php 
    
    foreach($categories as $cat){
        ?>
        <li><a id=<?php echo "d".$cat[id] ?> onclick="myfunction(<?php echo $cat['id']?>)" href="#col2"><?php echo $cat['title']; ?></a></li>

<?php
    }
    
    ?>  

    <li><a href="../includes/api.php"  target="_blank"> News Api</a></li>

   

    
  <!--  <li class="active"><a href="index.html">Home</a></li>
      <li><a href="pages/style-demo.html">Style Demo</a></li>
      <li><a href="pages/full-width.html">Full Width</a></li>
      <li><a href="#">DropDown</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </li>
      <li><a href="pages/portfolio.html">Portfolio</a></li>
      <li class="last"><a href="pages/gallery.html">Gallery</a></li>
-->
    </ul>
   
<script>

document.addEventListener("DOMContentLoaded",myfunction(1));
function myfunction(str){

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("hpage_services").innerHTML = this.responseText;
  }
};
xmlhttp.open("GET","includes/getquery.php?id="+str,true);
xmlhttp.send();


}

</script>
  </div>