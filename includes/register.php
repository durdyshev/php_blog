<?php
require "../includes/db.php" ;
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../layout/styles/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <main class="form-signin">
  <form  method="POST" >
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

   
    <button class="w-100 btn btn-lg btn-danger"  type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>


<?php

if(isset($_POST['email'])){

  $email=$_POST['email'];
  $password= $_POST['password'];
    $user_query_text="SELECT * FROM users WHERE username='$email' AND password='$password'";
    $user_query=mysqli_query($connection,$user_query_text);

if(mysqli_num_rows($user_query)>0){

echo "<script>alert('Kullanici kayitli'); </script>";

}
else{

 echo "Record doesnt exist";
    $user_query_text="INSERT INTO `users` (`username`,`password`) VALUES ('$_POST[email]','$_POST[password]')";


    if(mysqli_query($connection,$user_query_text)){
     
    echo "Basarili";
      echo $_POST['email'] . "<br>";
      echo $_POST['password']. "<br>";
      $_SESSION['haha']=$_POST['email'];
    
      echo "leddo".$_SESSION['haha'];
      
     
      exit("<meta http-equiv='refresh' content='0; url= ../index.php'>");
      
      
    }


}
  
   
  
  
  
  
}

?>




</html>
