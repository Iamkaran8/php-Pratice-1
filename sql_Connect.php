<!-- <?php

// $db_server ="localhost";
// $db_user = "root";
// $db_password = ""; 
// $db_name = "sql_connect";
// $conn = "";

// $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
// if($conn){
//     echo "Server working";

// }else{
//     echo "Server Not WOrking";
// }
// $username = $_POST['Uname'];
// $pass = $_POST['pass'];
// $insert_val = "INSERT INTO `user details`(`id`, `username`, `password`) VALUES ('[value-1]','$username','$pass')";
// mysqli_query($conn,$insert_val);

?>

# Following Codes are Worng
<form method="post">
    Username <input type="text" name="Uname"> <br>

    Password <input type="password" name="pass"> <br>

   
    <input type="submit" value="submit">
</form>

<?php
// $USERNAME= $_POST['username'];
// $PASSWORD_ = $_POST['passwor'];
// $check = "SELECT * FROM `user details` WHERE username=$USERNAME and password=$PASSWORD_" ;
// if(mysqli_query($conn,$check)){
//     echo "Login Success";
// }else{
//     echo "Login Fails";
// }
?>
<h1>Login Form</h1>
<form method="post">
    Username <input type="text" name="username"> <br>

    Password <input type="password" name="passwor"> <br>
   
    <input type="submit" value="Login">
</form> -->

<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form  method="post">
        <h1>Registration Form</h1>

        <label for="name">Username:</label>
        <input type="text" id="name" name="User"> <br><br>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="Pass"><br><br>

        <input type="submit" value="Sign in">
</form>
<?php 
    $db_server = "localhost";
    $db_user =  "root";
    $db_pass = "";
    $db_name = "php";
    $conn = "";
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    
    if($conn){
        echo "Server working Fine";
    }else{
        echo "Server Not working Fine";
    }
    
    $User = $_POST['User'];
    $Pass = $_POST['Pass'];

    
    $Signin = "INSERT INTO `details` (`id`, `username`, `password`) VALUES ('[value-1]', '$User' , '$Pass')";
    mysqli_query($conn,$Signin);

    ?>

    <form method="post">
        <h1>Login Form</h1>

        <label for="name">Username:</label>
        <input type="text" id="name" name="Username"> <br><br>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="Password"><br><br>

        <input type="submit" value="Login">
    </form>
    <?php 
    $USERNAME = $_POST['Username'];
    $PASSWORD = $_POST['Password'];
    $delete = "SELECT `id`, `username`, `password` FROM `details` WHERE username = $USERNAME ,password=$PASSWORD";

        if($USERNAME == $PASSWORD){
            echo "$PASSWORD <br>";
            echo "Login Success";
        }else{
            echo "Login Fails";
        }
    ?>
</body>
</html>