<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "boutique";

$connect = mysqli_connect($servername,$username,$password,$dbname);
if(!$connect)
    {
        echo "Connection Failed.<br>";
    }
else
    {
        echo "Connection Successful.<br>";
    }

            // $sql = "CREATE TABLE CONTACT(
            //     ID INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            //     NAME VARCHAR (50) NOT NULL,
            //      PHONE VARCHAR (50) NOT NULL,
            //     EMAIL VARCHAR (100),
            //     COMMENT VARCHAR (200) NOT NULL  
            // )";

            // if(mysqli_query($connect,$sql))
            //     {
            //         echo "Table Created Successfully.<br>";
            //     }
            // else 
            //     {
            //         echo "Error Creating Table".mysqli_error($connect);
            //     }

$name = $_GET["name"];
$contact = $_GET["number"];
$email = $_GET["email"];
$message = $_GET["message"];

$sql = "INSERT INTO CONTACT(NAME,PHONE,EMAIL,COMMENT) 
        VALUE('$name','$contact','$email','$message')";

if(mysqli_multi_query($connect,$sql))
    {
        echo'<script>alert("Feedback send successfully");
        window.location.href="my.php";</script>';
    }
else
    {
        echo "Error: " .$sql ."<br>".mysqli_error($connect);
    }
mysqli_close($connect);
?>