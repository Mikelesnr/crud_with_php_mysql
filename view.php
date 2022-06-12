<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
</head>
<body>

    <h1>View Records</h1>

    <?php 
    
        include('connect-db.php');

        if ($result = $mysqli->query("SELECT * FROM players ORDER BY id"))
        {
            if ($result->num_rows > 0)
            {
                echo "<table border='1' cellpadding='10'>";
                echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th></th><th></th></tr>";
                
                while($row = $result->fetch_object())
                {
                    echo "<tr>";
                    echo "<tr>";
                    echo "<td>" . $row->id . "</td>";
                    echo "<td>" . $row->firstname . "</td>";
                    echo "<td>" . $row->lastname . "</td>";
                    echo "<td><a href='records.php?id=" . $row->id . "'>Edit</a></td>";
                    echo "<td><a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
                    echo "</tr>";
                };
                echo "</table>";
            }
            else
            {
                echo "No results to display!";
            }

        }
        else{
            echo "Error: " . $mysli->error;
        };
        $mysqli->close();
    
    ?>

    <a href="records.php">Add New Record</a>
    
</body>
</html>