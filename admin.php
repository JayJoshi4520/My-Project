<?php
    $con = new mysqli('localhost','root','$Jay452002', 'Projects');

    $sql = "SELECT * FROM `Contact`"; 
    $result = mysqli_query($con,$sql);

    $con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./admin.css" type="text/css">
    <title>Admin Contact</title>
</head>
<body>
    <div class="main">
    <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Messaeg</th>
          <th>Date</th>
        </tr>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['message']?></td>
                            <td><?php echo $row['date']?></td>
                        </tr>

                    <?php
                }
            }
        ?>
    </table>
    </div>
</body>
</html>