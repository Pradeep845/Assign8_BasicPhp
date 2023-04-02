<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formm</title>
</head>
<body>
    <center>
        <div class="container1">
            <h1>Enter the Registration form</h1> <hr> <br> <br>
            <form action="insert.php" method="post">
            <label>First Name:  </label>
            <input type="text"  name="first_name" value="" required/>  
            <br> <br>
            <label >Last Name:  </label>
            <input type="text"  name="last_name" value=""  /> <br> <br>
            <label >Email: </label>
            <input type="email" name="email" value="" required/> <br> <br>
            <label >Password: </label>
            <input type="password" name="password" value="" required/> <br> <br>
            <label >Confirm Password: </label>
            <input type="password"  name="confirm_password" value="" required/> <br> <br>
            <input type="submit">

            </form>
            <br><hr>
            <h2>Already Registered? Login here! </h2>
            <a href="login.php"><button>Login</button></a>
        </div>
    </center>
</body>
