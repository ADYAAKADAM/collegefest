<?php
$insert=false;
if(isset($_POST['name'])){
$sever ="localhost";
$username ="root";
$password ="";

$con = mysqli_connect( $sever,$username,$password);
 
if(!$con){
    die("connection to this data base is failed due to" . mysqli_connect_error());

}
$name = $_POST['name'];

$gender = $_POST['gender'];
$semester= $_POST['semester'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$sql="INSERT INTO `festival`.`fest` (`name`, `gender`, `semester`, `email`, `phone`, `date`) VALUES ('$name' ,'$gender' ,'$semester', '$email', '$phone', current_timestamp());";
if ( $con ->query($sql) == true)
{
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to sdmit</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="SDMIT">
    <div class="container">
        <h1>welcome to sdmit festival</h1>
        <p>enter your information below to confirm your parcipation</p>

         
             <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="text" name="semester" id="semester" placeholder="enter your semester">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone no">
            <span><button class="btn">submit</button></span>
           
         
        </form>
    </div>

</body>

</html>
