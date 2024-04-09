<?php
include "config.php";





// $sql="CREATE TABLE ADMIN(
//     ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     ADMIN_ID VARCHAR(6) NOT NULL,
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


// $sql="INSERT INTO ADMIN(ADMIN_ID,PASSWORD)
// VALUES(12345,'admin')";
// if( mysqli_query($conn,$sql))
// {
// echo "inserted";
// }
// else
// {
//     echo "Failed to insert data".mysqli_error($conn);
// }

$uname=mysqli_real_escape_string($conn,$_POST['admin_id']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$result=mysqli_query($conn,"SELECT *FROM ADMIN WHERE ADMIN_ID='$uname' AND PASSWORD='$password'")or die('query failed'.mysqli_error());
$row=mysqli_fetch_array($result);
if(($row['ADMIN_ID']==$uname)&&($row['PASSWORD']==$password)){
    header('location:button1.php');
    
}
else{
    echo"login unsucessfull";
}
?>



