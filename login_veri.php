
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
        $myemail = mysqli_real_escape_string($conn,$_POST['email']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        
        $sql = "SELECT id FROM users where email = '$myemail' and password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
            $id=$row['id'];
            session_start();
            $_SESSION['id']=$id;
           header("location: welcome.php");
        }else {
            echo "Your Email or Password is invalid<br/><br/>";
            echo "<a href='login.php'><button>Login Again</button></a>";
        }
        ?>
</body>
</html>