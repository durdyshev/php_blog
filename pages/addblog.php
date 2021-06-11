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
   
    <form  method="POST">
  <div class="form-group">
    <label for="title_id">Title</label>
    <input type="text" class="form-control" id="title_id" name="title" aria-describedby="emailHelp" placeholder="Enter title">
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
  </div>

   <div class="form-group">
  <label for="imagelink">Image Link</label>
    <input type="text" class="form-control" id="imagelink" name="image" aria-describedby="emailHelp" placeholder="Image Link">
   </div>

   <div class="form-group">
  <label for="categorie_id">Category Id</label>
    <input type="number" class="form-control" id="categorie_id" name="categorie" aria-describedby="emailHelp" placeholder="Enter Id">
   </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="card-body">
                            <hr>
                            <h5 class="card-title" id = "films-title">Filmler</h5>
        
                            <hr>
                            <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Text</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category Id</th>
                                      </tr>
                                    </thead>
                                    <tbody id = "films">
                                         <tr>
                                            <td><img src="" class="img-fluid img-thumbnail"></td>
                                            <td>title</td>
                                            <td>text</td>
                                            <td>4</td>
                                            <td><a href="#" id = "delete-film" class = "btn btn-success">Update</a></td>
                                            <td><a href="#" id = "delete-film" class = "btn btn-danger">Delete</a></td>
                                          </tr> 
                                          <!-- <tr>
                                            <td><img src="" class="img-fluid img-thumbnail"></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#" id = "delete-film" class = "btn btn-danger">Filmi Sil</a></td>
                                          </tr> -->
                                    </tbody>
                                  </table>
                            <hr>  
                            <a id = "clear-films" class="btn btn-dark" href="#">Tüm Filmleri Temizleyin</a>               
                        </div>
    
    </div>
    </div>


</body>
</html>

<?php 
if(isset($_POST['title']) && isset($_POST['text'])){

  $categorie=intval($_POST['categorie']);
$query_post_tekst="INSERT INTO `articles` (`title`,`text`,`image`,`categorie_id`) VALUES ('$_POST[title]','$_POST[text]','$_POST[image]',$categorie)";


if(mysqli_query($connection,$query_post_tekst)){

    echo "eklendi";
}
else{
  echo "Error:" . $texto . "<br>" . mysqli_error($connection);
}

}



?>