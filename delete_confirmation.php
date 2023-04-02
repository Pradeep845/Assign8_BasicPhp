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
<?php
     $dbhost="localhost";
     $dbuser="root";
     $dbpass="Vasudev@123";
     $dbname="dbtest";
     $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
     if($conn->connect_error){
         die("Connection failed: ". $conn->connect_error ."\n");
     }
    $sql= "delete from  users where id=$id";
    if(mysqli_query($conn,$sql)){
        header("location: login.php");
    }
    else{
        echo "Error: ". mysqli_error($conn);
    }
    ?>
</body>
</html>