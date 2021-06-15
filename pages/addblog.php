<?php
include "../includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron" style="background-color:white">
    <div class="container">
   
    <form  method="POST" action="../pages/addblog.php">
     <div class="form-group">
    <label for="article_title">Title</label>
    <input type="text" class="form-control" id="article_title" name="title" aria-describedby="emailHelp" placeholder="Enter title">
  </div>
  <div class="form-group">
  <label for="article_text">Text</label>
    <textarea class="form-control" id="article_text" name="text" rows="3"></textarea>
  </div>

   <div class="form-group">
  <label for="article_image">Image Link</label>
    <input type="text" class="form-control" id="article_image" name="image" aria-describedby="emailHelp" placeholder="Image Link">
   </div>

   <div class="form-group">
  <label for="article_categorie_id">Category Id</label>
    <input type="number" class="form-control" id="article_categorie_id" name="categorie" aria-describedby="emailHelp" placeholder="Enter Id">
   </div>
   <div class="form-group" style="visibility:hidden" id="grup_id">
    <label for="article_id">Id</label>
    <input type="text" class="form-control" id="article_id" name="article_id" aria-describedby="emailHelp" readonly>
  </div>
 
  <button type="submit" class="btn btn-primary" id="form_article_insert">Submit</button> 
  <button type="submit" class="btn btn-success" id="form_article_update" style="visibility:hidden">Update</button>
</form>






<div class="card-body">
                            <hr>
                            <h5 class="card-title" id = "films-title">Articles</h5>
        
                            <hr>

   


                            <table class="table table-dark">


                    
                                    <thead>
                                      <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Text</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category Id</th>
                                      </tr>
                                    </thead>
                                    <tbody id = "articles" style="justify-content:center; align-items: center;">
                                    <?php 
    $article_query_text="SELECT * FROM articles";
    $article_query=mysqli_query($connection,$article_query_text);

    if(mysqli_num_rows($article_query)>0){
     while($row=mysqli_fetch_assoc($article_query)){
      
        ?>

                                            <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><img src="<?php echo $row['image'] ?>" class="img" style="width:150px;height:100px"></td>
                                            <td><?php echo $row['title'] ?></td>
                                            <td><?php echo $row['text'] ?></td>
                                            <td><?php echo $row['categorie_id'] ?></td>
                                            <td><a href="#" id = "update_article" class = "btn btn-success" onclick="updatearticle(`<?php echo $row['title']?>`,`<?php echo $row['text']?>`,`<?php echo $row['image']?>`,`<?php echo $row['categorie_id']?>`,`<?php echo $row['id']?>`)">Update</a></td>
                                            <td><a href="#" id = "delete_article" class = "btn btn-danger" onclick="myfunction(<?php echo $row['id']; ?>)">Delete</a></td>
                                          </tr> 

        <?php  
/*<?php echo $row['title'], $row['text'] , $row['image'] ,$row['categorie_id'] , $row['id']?>`*/        
      }
      
    }
    ?>
                                        
                                          <!-- <tr>
                                            <td><img src="" class="img-fluid img-thumbnail"></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#" id = "delete-film" class = "btn btn-danger">Filmi Sil</a></td>
                                          </tr> -->
                                    </tbody>
                                  </table>
                            <hr>  
                            <a id = "clear_all_articles" onclick="delete_all()" class="btn btn-dark" href="#">Delete All Articles</a>               
                        </div>
    
    </div>
    </div>


</body>
</html>

<script> 


//updatearticle(`<?php echo $row['title'] , $row['text'] , $row['image'] , $row['categorie_id'] , $row['id'] ?>`)
function updatearticle(title,text,image,category_id,id) {
 console.log(title,text);
  
/* console.log(title,text,image,category_id,id);*/
document.getElementById("article_title").value=title;
document.getElementById("article_text").value=text;
document.getElementById("article_image").value=image;
document.getElementById("article_categorie_id").value=category_id;
document.getElementById("article_id").value=id;
document.getElementById("grup_id").style.visibility="visible";
document.getElementById("form_article_update").style.visibility="visible";

document.getElementById("form_article_insert").remove();
}


function myfunction(id){
console.log(id+"sass");
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("films-title").innerHTML = this.responseText;
  }
};
xmlhttp.open("GET","../includes/deletearticle.php?id="+id,true);
xmlhttp.send();

}
function delete_all(){

  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("films-title").innerHTML = this.responseText;
  }
};
xmlhttp.open("GET","../includes/deleteall.php",true);
xmlhttp.send();

}





</script>







<?php 
if($_POST['title']!=null && $_POST['text']!=null && $_POST['article_id']==null){

  $categorie=intval($_POST['categorie']);
$query_post_tekst="INSERT INTO `articles` (`title`,`text`,`image`,`categorie_id`) VALUES ('$_POST[title]','$_POST[text]','$_POST[image]',$categorie)";


if(mysqli_query($connection,$query_post_tekst)){

  echo "<script>alert('post added'); </script>";

}
else{
  echo "Error:" . $texto . "<br>" . mysqli_error($connection);
}

}
if($_POST['article_id']!=null){

  $article_idd=intval($_POST['article_id']);
  $categorie_id=intval($_POST['categorie']);
$query_post_tekst="UPDATE `articles` SET  `title`='$_POST[title]',`text`='$_POST[text]',`image`='$_POST[image]',`categorie_id`=$categorie_id WHERE `id`=$article_idd";


if(mysqli_query($connection,$query_post_tekst)){

    echo "<script>alert('post updated'); </script>";
}
else{
  echo "Error:" . $texto . "<br>" . mysqli_error($connection);
}

}



?>