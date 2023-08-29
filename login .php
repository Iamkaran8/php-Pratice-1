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



if(!isset($_POST['submit'])){
    $Uname = $_POST['Uname'];
    $password = $_POST['password'];
$query  = "SELECT * FROM `reg` WHERE username=$Uname AND password= $password";
$queryfire = mysqli_query($conn,$query );
$user_data = mysql_fetch_array($queryfire);
$num  = mysqli_num_rows($queryfire);
if(mysqli_num_rows($queryfire)>0){
echo "karan";
}else{
    echo "lotus";
}

// if($result_check > 0){
//     echo "Login Successful";
// }else{
//     echo "You entered Wrong password";
// }
}
$delete=mysqli_query($conn,"DELETE FROM studentinfo WHERE id='$id'");
            if(mysqli_num_rows($delete)>0)
            {
                echo "not don";
                header('location:student.php');
            }
            else{
                echo "done delete.";
                header('location:student.php');
            }
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