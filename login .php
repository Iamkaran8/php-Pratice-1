<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php

$db_server = "localhost";
$db_user="root";
$db_pass="";
$db_name="login";
$conn = "";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn){
    echo "server is working";
}else{
    echo "server is not working";
}

$reg_name =$_POST["reg_name"];
$reg_password=$_POST["reg_password"];
$reg_query ="INSERT INTO `reg` (`id`, `username`, `password`) VALUES ('[value-1]', '$reg_name', '$reg_password')" ;
mysqli_query($conn,$reg_query);

?>

<body>
    <form method="post">
        <h1>Registration Form</h1>
        <label for="reg_name">Enter Your Name:</label><input type="text" name="reg_name" id="reg_name"> <br><br>
        <label for="reg_password">Enter Your password:</label><input type="password" name="reg_password" id="reg_password"><br><br>
        <input type="submit" value="create account">
    </form>
    <br> <br> <br>
    <form method="post">
        <h1>Login Form</h1>
        <label for="Uname">Enter Your UserName:</label><input type="text" name="Uname" id="Uname"> <br><br>
        <label for="password">Enter Your password:</label><input type="password" name="password" id="password"><br><br>
        <input type="submit" value="create account">
    </form>
</body>

</html>