<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../bootstrap.min.css>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
<?php
include '../components/navBar.html';
include '../data.php';
?>
<div class="container-fluid justify-content-center align-items-center">


<?php

   $id = $_GET["id"];
   $userData = array();
   foreach ($data as $value){
       if($value['id'] == $id){
          $userData = $value;
       }
   }
   $image = $userData['image'];
   $name = $userData['name'];
   $birthday = $userData['birthday'];
echo
"<img src='https://coverfiles.alphacoders.com/712/thumb-1920-71285.jpg' style='height: 300px; width: 100vw' class='img-fluid' alt=''>
    <div class='container'>
        <div class='row justify-content-md-center'>
            <div class='col col-lg-2'>
        <img src='$image' class='img-thumbnail row justify-content-md-center' alt=''>
    </div>";
 echo
 "<div class='container'>
        <div class='row justify-content-md-center'>
             <div class='col col-lg-2'>
                 <h2>$name</h2>
 </div>";

 echo
 "<div class='container'>
        <div class='row justify-content-md-center'>
             <div class='col col-lg-2'>
                Social Links:
               <a href='#'><i class='fab fa-github' style='font-size: 1rem; color: white;margin: 5px'></i></a>
               <a href='#'><i class='fab fa-linkedin' style='font-size: 1rem; color: white'></i></a>
             </div>
        </div>
 </div>";

 echo  "<div class='container'>
        <div class='row justify-content-md-center'>
             <div class='col col-lg-2'>
               Birthdate: <strong> $birthday </strong>
             </div>
        </div>
 </div>";




?>
</div>
</body>
</html>