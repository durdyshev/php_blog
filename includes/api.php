<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
    $url='https://newsapi.org/v2/everything?q=Apple&from=2021-06-02&sortBy=popularity&apiKey=e8b6e8ee53024f2e9fdfc903b91860c1';
    $response=file_get_contents($url);
    $NewsData=json_decode($response);
    
    ?>
    
    <div class="jumbotron">
        <h1>Google News Api | Php</h1>
    </div>
    <div class="container">
      <?php
    foreach($NewsData -> articles as $News){
    
       ?>  
       <div class="row">
           <div class="col-md-3"><img class="img-thumbnail"src="<?php echo $News->urlToImage ?>" alt=""></div>
           <div class="col-md-9">
               <h2>Title: <?php echo $News->title ?></h2>
               <h2><a target="_blank" href=<?php echo $News->url ?>> <?php echo $News->url ?> </a></h2>
               <p><?php echo mb_substr($News->content,0,50,'utf-8') ?></p>


           </div>
       </div>
    <?php }?>
    </div>
</body>
</html>