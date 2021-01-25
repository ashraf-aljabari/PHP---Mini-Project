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
        $studentCount = 0;
        $completedProjects = 0 ;
        foreach ($data as $value){
            $studentCount ++;
            if($value['projects'][0]['is_completed'] ==  "yes"){
                $completedProjects ++;
            }
            if($value['projects'][1]['is_completed'] ==  "yes"){
                $completedProjects ++;
            }
        }
        $studentProject = $studentCount * 2;
        echo "<h2 style='text-align: center'>Number of Student: $studentCount</h2>";

        echo "<h3 style='text-align: center'>Number of projects: $studentProject</h3>";

        echo "<h3 style='text-align: center'>Number of completed projects: $completedProjects</h3>";

        foreach ($data as $value){


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