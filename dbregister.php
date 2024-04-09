<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="boutique";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "connection failed";
}
else{
    echo "connected";
}

// $sql="CREATE DATABASE BOUTIQUE";
// if( mysqli_query($conn,$sql))
// {
//     echo "database created";
// }
// else
// {
//     echo "failed to create database".mysqli_error($conn);
// }



// $sql="CREATE TABLE REGISTER(
//     ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     NAME VARCHAR(20) NOT NULL,
//     EMAIL VARCHAR(50) NOT NULL,
//     PHONE VARCHAR(10) NOT NULL,
//     PASSWORD VARCHAR(25) NOT NULL
// )";
// if( mysqli_query($conn,$sql))
// {
//     echo "TABLE created";
// }
// else
// {
//     echo "failed to create TABLE".mysqli_error($conn);
// }

$name=$_GET['name'];
$email=$_GET['email'];
$number=$_GET['number'];
$password1=$_GET['psw'];

// echo "$name,$email,$number,$roll,$password1";
$sql="INSERT INTO REGISTER(NAME,EMAIL,PHONE,PASSWORD)
VALUES('$name','$email','$number','$password1')";

if( mysqli_query($conn,$sql))
{
header('location:index.php');
}
else
{
    echo "Failed to insert data".mysqli_error($conn);
}


?>
