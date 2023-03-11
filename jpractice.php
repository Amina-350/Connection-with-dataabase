<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // here we connect it with database
$servername="localhost";
$username="root";
$password="";
$database="practice2";
$conn=mysqli_connect($servername,$username,$password,$database);
echo "connection sucessfully"; 

// now we will create table
$table1="CREATE TABLE `p1`(`sno` INT(6) NOT NULL AUTO_INCREMENT,`name` VARCHAR(8) NOT NULL,`age`
VARCHAR(6) NOT NULL,PRIMARY KEY(`sno`))";
// here we create database
// $con="CREATE DATABASE Practice2";
$result=mysqli_query($conn,$table1);
if($result){
    echo "connection sucessfully";

}
else{
  echo  "<br>";
    echo "not connect";}
?>

</body>
</html>
