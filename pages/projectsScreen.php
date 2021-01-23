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
include '../data.php';
?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Project Name</th>
            <th scope="col">Is Completed</th>
            <th scope="col">Project Name</th>
            <th scope="col">Is Completed</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $value){
            $checkingTime = round((strtotime($value['attendance'][0]['check_out']) - strtotime($value['attendance'][0]['check_in']))/3600,1 );
            $checkingTime2 = round((strtotime($value['attendance'][1]['check_out']) - strtotime($value['attendance'][1]['check_in']))/3600,1 );

            echo "<tr>
                     <th scope='row'>".$value['id']."</th>
                     <td>".$value['name']."</td>";

            if($value['projects'][0]['is_completed'] ==  "yes"){
                echo   "<td class='bg-success'>".$value['projects'][0]['project_name']."</td>
                            <td class='bg-success'>".$value['projects'][0]['is_completed']."</td>";
            }else{
                echo"<td class='bg-danger'>".$value['projects'][0]['project_name']."</td>
                            <td class='bg-danger'>".$value['projects'][0]['is_completed']."</td>";
            };

            if($value['projects'][1]['is_completed'] ==  "yes"){
                echo   "<td class='bg-success'>".$value['projects'][1]['project_name']."</td>
                            <td class='bg-success'>".$value['projects'][1]['is_completed']."</td>";
            }else{
                echo"<td class='bg-danger'>".$value['projects'][1]['project_name']."</td>
                            <td class='bg-danger'>".$value['projects'][1]['is_completed']."</td>";
            }

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>