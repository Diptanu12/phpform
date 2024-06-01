<?php
include('./includes/connect.php');
include('./includes/encrytion.php');



if (isset($_POST['btnsubmit'])) {
    $Name = $_POST['name'];
    $Phone = enc_data($_POST['phone']);
    $Email = enc_data($_POST['email']);
    $Address = $_POST['address'];

    $SQL = "INSERT INTO `form1`(`Name`, `Phone`, `Email`, `Address`) VALUES ('$Name','$Phone','$Email','$Address')";

    if ($conn->query($SQL) === TRUE) {
        echo "<script>alert('Form Submitted Successfully')</script>";
    } else {
        echo "<script>alert('Form is not Submitted')</script>"; 
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<nav>
        <ul>
            <li><a href="index.php">Form</a></li>
            <li><a href="formdetails.php">Details</a></li>
        </ul>
    </nav>
    <h2>Contact Form</h2>
    <form id="contactForm" action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit" name="btnsubmit">
    </form>
</body>

</html>