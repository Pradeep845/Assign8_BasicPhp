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
            $first_name=$_POST['first_name'];
            // echo $first_name;
            $last_name=$_POST['last_name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
               echo  "<h2>Only letters and white space allowed</h2>";
               exit();
            }
            if (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)) {
                echo "<h2>Only letters and white space allowed</h2>";
                exit();
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<h2>Invalid email format</h2>";
                exit();
            }
            if($password!=$confirm_password){
                echo "<h2>Password and Confirm password should be same</h2>";
                exit();
            }
            if (strlen($password) < 8) {
                echo "Password too short!";
                exit();
            }
        
            if (!preg_match("#[0-9]+#", $password)) {
                echo "Password must include at least one number!";
                exit();
            }
        
            if (!preg_match("#[a-zA-Z]+#", $password)) {
                echo "Password must include at least one letter!";
                exit();
            }     

            $sql ="Insert into users values(NULL,'$first_name','$last_name','$email','$password')";
            if(mysqli_query($conn,$sql)){
                echo "<h2>Data Stored Successfully</h2>";
                echo "<a href='login.php'><button>Login Now</button></a>";
            }
            else{
                echo "Error: ". mysqli_error($conn);
            }
            mysqli_close($conn);
    ?>
</body>
</html>