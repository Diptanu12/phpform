<?php
include('./includes/connect.php');
include('./includes/encrytion.php');
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


<nav>
        <ul>
        <li><a href="index.php">Form</a></li>
            <li><a href="formdetails.php">Details</a></li>
        </ul>
    </nav>

    <h2>Contact Details</h2>
    <table id="contactTable">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $x = 1;
            $sql = "SELECT `id`, `Name`, `Phone`, `Email`, `Address` FROM `form1`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $x++ ?></td>
                        <td><?php echo $row["Name"];  ?></td>
                        <td><?php echo dec_data($row["Phone"]);  ?></td>
                        <td><?php echo dec_data($row["Email"]);  ?></td>
                        <td><?php echo $row["Address"];  ?></td>

                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>