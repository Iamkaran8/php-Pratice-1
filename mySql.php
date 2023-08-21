<?php 

// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "newdb";
// $conn = "";


// $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
// if($conn){
//     echo "You are connected";
// }else{
//     echo "Could Not Connected";
// }
?>

<?php 

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "newdb";
$conn = "";


try{
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

}
catch(mysqli_sql_exception){
    echo "Could Not Connected";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.html">
        
    </form>
</body>
</html>