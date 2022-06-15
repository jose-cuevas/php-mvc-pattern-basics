<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1>Employees Dashboard</h1>
    <table class="table">
    <thead>
        <td scope="col">Id</td>
        <td scope="col">Name</td>
        <td scope="col">Email</td>
        <td scope="col">Gender</td>
        <td scope="col">City</td>
        <td scope="col">Age</td>
        <td scope="col">Phone Number</td>
    </thead>

    <tbody>
    <?php
    
        foreach ($employees as $index => $employee)
        {
            echo "<tr scope='row'>";
                echo "<td>" . $employee["id"] . "</td>";
                echo "<td>" . $employee["name"] . "</td>";
                echo "<td>" . $employee["email"] . "</td>";
                echo "<td>" . $employee["gender"] . "</td>";
                echo "<td>" . $employee["city"] . "</td>";
                echo "<td>" . $employee["age"] . "</td>";
                echo "<td>" . $employee["phone_number"] . "</td>";                

            echo "</tr>";
        }
            // echo "<pre>"; 
            // print_r($employees);
        ?>
    </tbody>
    </table>

   <a href="index.php" class="btn btn-primary"> Home </a>
    


</body>
</html>