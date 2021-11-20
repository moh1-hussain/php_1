<?php
if(isset($_POST['name'])){
    //set a variable
$server="localhost";
$username="root";
$password="";
$dbname="trip";
//create a database connection
$con= mysqli_connect($server,$username,$password,$dbname);

//check forconnection success
if (!$con) {
    die("connection to this database due to".
    mysqli_connect_error());

}
//echo "success connection to the db";
//collect post variable
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql=" INSERT INTO trip ( name, age, gender, email, phone, other, dt) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
//exexcute query
if($con->query($sql)==true){
   // echo "successfully inserted";

}
else{
    echo "ERROR: $sql <br> $con->error";
}//close database connection
$con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="skit">
    <div class="container">
        <h1>Welcome to SKIT Kerela Trip form</h1>
        <p>Enter your details and submit this form to conform your participation in the trip</p>
        <p class="submitmsg">Thanks for submitting your form. we are happy to see you joining for the kerela trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">

            <input type="text" name="email" id="email" placeholder="enter your email">
            <input type="text" name="phone" id="phone" placeholder="enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="enter any other information here"></textarea>
            <button class="btn">submit</button>

        </form>
    </div>
    <script src="index.js"></script>
   
</body>

</html>
