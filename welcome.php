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
    <?php
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="Vasudev@123";
        $dbname="dbtest";
        $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
        if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error ."\n");
        }
        $sql = "SELECT first_name,last_name,email FROM users where id=$id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $fname=$row['first_name'];
        $lname=$row['last_name'];
        $email=$row['email'];
        echo "<br/><h1>Hello, $fname $lname</h1><br/>";
        echo "<a href='view.php'><button>View Your Profile</button></a>";
    ?>
    <h2><a href="update.php">Update Profile</a><br/></h2>
    <h2><a href="delete.php">Delete Profile</a><br/></h2>
    <form action="logout.php">
     <button type="submit">
         Log out
     </button>
 </form>
    </center>
</body>
</html>