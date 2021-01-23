<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../bootstrap.min.css>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>

<?php include '../data.php' ?>

<?php include '../components/navBar.html' ?>



<div class="container">
    <div class="row">
<?php
foreach ($data as  $value){
    $id =  $value["id"];
    $image = $value["image"];
    echo "<div class='col-md'>";
    echo "<div class='card text-center' style='width: 18rem;'>";
    echo "<img src='$image' class='card-img-top' style='' alt='...'>";
    echo "<div class='card-body'>";
    echo "<h3>".$value["name"]."</h3>";
    echo "<a href='profileScreen.php?id=$id' class='btn btn-success'>View Profile</a>";
    echo "</div>";
    echo "</div>";
    echo " </div>";
}
?>
    </div>
</div>


</body>
</html>