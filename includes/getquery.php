<?php
require 'db.php';
//echo "Haydo";
$numb= $_GET['id'];

$text="SELECT * FROM articles WHERE categorie_id=$numb ORDER BY `pubdate` DESC";

/*echo $text;

echo '<br>';
echo  $numb+2;
echo $numb;*/
$counter=0;

$article_query=mysqli_query($connection,$text);
if(mysqli_num_rows($article_query)>0){
    while($row=mysqli_fetch_assoc($article_query)){
       $counter++; 
if($counter%3==0){?>

<div class="block last">
<img class="img-thumbnail" style="width:100px;height:100px; margin-right:10px"src=<?php echo $row["image"] ?> alt="" />
<h2><a href="pages/style-demo.php?id=<?php echo $row['id'] ?>"><?php echo mb_substr(strip_tags($row['title']),0,50,'utf-8') . ' ...'; ?></a></h2>  
<p><?php echo mb_substr(strip_tags($row['text']),0,125,'utf-8') . ' ...';?></p>     </div>
      <div class="spacer">&nbsp;</div>

<?php
}
else{?>

<div class="block">
<img class="img-thumbnail" style="width:100px;height:100px; margin-right:10px"src=<?php echo $row["image"] ?> alt="" />
<h2><a href="pages/style-demo.php?id=<?php echo $row['id'] ?>"><?php echo mb_substr(strip_tags($row['title']),0,50,'utf-8') . ' ...';?></a></h2> 
 <p><?php echo mb_substr(strip_tags($row['text']),0,125,'utf-8') . ' ...';?></p>     </div>

<?php

}

     
    }
}
?>











