<!-- <?php

$db_server ="localhost";
$db_user = "root";
$db_password = ""; 
$db_name = "sql_connect";
$conn = "";

$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
if($conn){
    echo "Server working";

}else{
    echo "Server Not WOrking";
}
$username = $_POST['Uname'];
$pass = $_POST['pass'];
$insert_val = "INSERT INTO `user details`(`id`, `username`, `password`) VALUES ('[value-1]','$username','$pass')";
mysqli_query($conn,$insert_val);

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