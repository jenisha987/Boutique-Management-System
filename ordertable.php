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
    echo "connected<br>";
}

// $sql1 = "CREATE TABLE SKJORDER(
//     ID INT AUTO_INCREMENT PRIMARY KEY,
//     CUSTOMER_NAME VARCHAR(40) NOT NULL,
//         PRODUCT_NAME VARCHAR(120) NOT NULL,
//         QUANTITY INT(60) NOT NULL,
//         TOTAL_PAYMENT VARCHAR(120) NOT NULL
// )";

// if( mysqli_query($conn,$sql1))
// {
// echo 'Successful';
// }
// else
// {
//     echo "Failed".mysqli_error($conn);
// }

$name=$_GET['name'];
$product=$_GET['pname'];
$quantity=$_GET['quantity'];
$payment=$_GET['cost'];
$sql="INSERT INTO SKJORDER(CUSTOMER_NAME,PRODUCT_NAME,QUANTITY,TOTAL_PAYMENT)
VALUES('$name','$product','$quantity','$payment')";

if( mysqli_query($conn,$sql))
{
echo'<script>alert("Payment Succesful");
window.location.href="user_lehenga.php";</script>';
}
else
{
    echo "Failed to insert data".mysqli_error($conn);
}
?>