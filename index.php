<?php 
// echo "Hai Karan";


#If Condition
// if(condition){
    //Type Your Code 
// }elseif(Condition){
    //Type Your Code
// }else{
// }

#Logical Operators
// && And
// || Or
// ! Not

#Switch Case
// $grade = "A";

// switch($grade){
    
//     case "A";
//     echo "YOur Are Great";
//     break;

//     case "B";
//     echo "YOur Are Good";
//     break;

//     case "C";
//     echo "YOur Are OKey";
//     break;
//     default:
//         echo "When Nothing Works";

// }


// $date = "Tuesday";
// switch($date){

//     case "Monday";
//     echo "I Hate monnday";
//     break;

//     case "Tuesday";
//     echo "I like monnday";
//     break;

//     case "Wednesday";
//     echo "I love monnday";
//     break;

//     case "Thursday";
//     echo "I will monnday";
//     break;
// }


#For Loops
// for($i =0; $i<5;$i++){
//     echo "Hai Karan <h1>{$i}</h1> <br>";
// }

#While Loop
//Condition When false It Program Will Stop
// $num = 0;
// while($num <10){
//     echo "Hai THis is While Loop";
//     break;
// }

#Array
// $foods = Array("Apple","ORange","Banana","Coconet");

// echo $foods[1];
// foreach($foods as $a){
//     echo $a;
// }


# Associative Array
// $capitals = array(  "USA"=>"DC",
//                     "Japan"=>"Kyoto",
//                     "South Korea"=>"Seoul",
//                     "India"=>"New De=elhi"
// );

// foreach($capitals as $cap => $key){
//                         echo "<h1>{$cap}{$key} <br><br><h1>";
//                     }


#Isset() => Returns TRUE if a variable is declared and not null
#Empty() => Returns TRUE if a variable is not declared, false null

// $name = "Karan";
#Isset()
// if(isset($name)){
//     echo "Hai{$name}";
// }else{
//     echo "Name is Null";
// }

#empty()
// if(empty($name)){
//     echo "Name is Empty";
// }else{
//     echo "Name {$name}";
// }


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="Uname">Username:</label>
        <input type="text" id="Uname" name="Uname">
        <br><br>
        <label for="Pass">Password:</label>
        <input type="password" id="Pass" name="Pass">
        <br><br>
        <input type="submit" value="Submit"> -->
    </form>

    <?php

    // $Uname = $_POST['Uname'];
    // $Pass = $_POST['Pass'];
    // echo "Username = {$Uname} <br>";
    // echo "Password = {$Pass}";

    #Isset(),Empty
    // if(isset($Uname)){
    //     echo "<br>This is Your User name{$Uname}";
        
    // }else{
    //     echo "<br>There is no Username";
    // }
    ?>
<!-- </body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio"   name="credit_card"  value="Visa"> Visa <br><br>
    <input type="radio"   name="credit_card"  value="Mastercard"> Mastercard <br>
    <input type="radio"   name="credit_card"  value="Rupay"> Rupay <br>
    <input type="submit"  name="confirm"  value="Confirm">
    </form>
    <?php
   
    ?> // $Credit_card = $_POST["credit_card"];
    // // echo $Credit_card;
    // if(isset($Credit_card))
</body>
</html> -->
<!-- 
<form action="index.php" method="post">
        <label for="Uname">Username:</label>
        <input type="text" id="Uname" name="Uname">
        <br><br>
        <label for="Pass">Password:</label>
        <input type="password" id="Pass" name="Pass">
        <br><br>
        <label for="Email">Email:</label>
        <input type="text" id="Email" name="Email">
        <br><br>
        <input type="submit" value="Submit"> 
    </form> -->

    <?php

    #Sanatize a User Input
    // INPUT_POST,
    // "Uname",
    // FILTER_SANITIZE_SPECIAL_CHARS

    // $Uname = $_POST['Uname'];
    // $Pass = $_POST['Pass'];
    // $Email = $_POST['Email'];
    // $Email = filter_input(INPUT_POST,"Email",FILTER_SANITIZE_EMAIL);
    // $Uname = filter_input(INPUT_POST,"Uname",FILTER_SANITIZE_SPECIAL_CHARS);
    // echo "Username = {$Uname} <br>";
    // echo "Password = {$Pass}";
    // echo "Your Email Is {$Email}";

    // #Isset(),Empty
    // if(isset($Uname)){
    //     echo "<br>This is Your User name{$Uname}";
        
    // }else{
    //     echo "<br>There is no Username";
    // }
    // ?>

    <!-- <form action="index.php" method="post">
        <label >Age</label><input type="text" name ="Age" >
        <br>
        <input type="submit" value="submit">
        <?php 
            // $Age = $_POST["Age"];
            // $Age = filter_input(INPUT_POST,"Age",FILTER_VALIDATE_INT);
            // echo "This is YPur Age {$Age}";
        ?>
    </form> -->


    <?php 
    #Include()
    // include("header.html");
    ?>
    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home PAge</title>
    </head>
    <body>
        
    </body>
    </html> -->

    <?php 
    // include("footer.php");
    ?>


<?php
    #Cookie
    // setcookie("Name","Karan",time()+ (20),"/");

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#Session</title>
</head>
<body>
    <form action="" method="post">
        this is login page
        <a href="footer.php">This is Footer page</a>
    </form>
    <?php
    $_SESSION["username"] ="karan";
    $_SESSION["password"] ="karan@123";
    ?>
</body>
</html>




















