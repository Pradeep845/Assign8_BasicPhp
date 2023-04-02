<?php
session_start();
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Are you sure to delete your Account</h1>
        <h2><span><a href="delete_confirmation.php">YES</a></span> &nbsp;&nbsp;&nbsp;
        <span><a href="welcome.php">NO</a></span> </h2>
        
    </center>
</body>
</html>