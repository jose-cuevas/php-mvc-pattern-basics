<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Hobbie Dashboard</title>
</head>
<body>
    <h1>Hobbies Dashboard</h1>
    <table  class="table">
    <thead class="table-secondary">
        <td>Name</td>
        <td>Type</td>
    </thead>
    <tbody>
        <?php
            // echo "<pre>";
            // print_r ($hobbies);

            foreach ($hobbies as $index => $hobbie){
                echo "<tr scope='row'>";
                echo "<td>" .$hobbie['name']. "</td>";    
                echo "<td>" .$hobbie['type']. "</td>";    
                echo "</tr>";
            }
            
        ?>

    </tbody>
    </table>
    <a href="index.php" class="btn btn-primary"> Home </a>
</body>
</html>