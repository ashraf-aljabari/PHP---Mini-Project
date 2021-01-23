<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=../bootstrap.min.css>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php include '../components/navBar.html';
include '../imageData.php';
?>
<h1>Academy Activities</h1>
<div class="container-fluid">
    <div class="container">
        <div class="row">
<?php
    foreach ($imageData as $value){
              echo  "<div class='col-sm-4'>
                        <div class='text-center'>
                        <img src='$value' class='rounded' style='width: auto;height: 300px' alt='...'>
                        </div>
                     </div>";
    }
?>
        </div>
    </div>
</div>



</body>
</html>