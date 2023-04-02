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
    <title>Formm</title>
</head>
<body>
    <?php
     $dbhost="localhost";
     $dbuser="root";
     $dbpass="Vasudev@123";
     $dbname="dbtest";

     $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
     if($conn->connect_error){
         die("Connection failed: ". $conn->connect_error ."\n");
     }
     $sql = "SELECT first_name,last_name,password FROM users where id=$id";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $fname=$row['first_name'];
     $lname=$row['last_name'];
     $pwd=$row['password'];
    ?>
    <center>
        <div class="container1">
            <h1>Update Profile</h1> <hr> <br> <br>
            <form action="update_checker.php" method="post">
            <label>First Name:  </label>
            <input type="text"  name="first_name" value="<?php echo $fname?>" required/>  
            <br> <br>
            <label >Last Name:  </label>
            <input type="text"  name="last_name" value="<?php echo $lname?>"  /> <br> <br>
            <label >Password: </label>
            <input type="password" name="password" value="<?php echo $pwd?>" required/> <br> <br>
            <label >Confirm Password: </label>
            <input type="password"  name="confirm_password" value="<?php echo $pwd?>" required/> <br> <br>
            <input type="submit">
            </form>
            <br><br>
<form action="logout.php">
    <button type="submit">
        Log out
    </button>
</form>
        </div>
    </center>
</body>
