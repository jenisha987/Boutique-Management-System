<?php
    
    include "config.php";
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    if(isset($_POST["submit"]))
    {      
        $result=mysqli_query($conn,"SELECT *FROM REGISTER WHERE EMAIL='$email' AND PASSWORD='$psw';")or die('query failed'.mysqli_error());
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        // $row=mysqli_fetch_assoc($result);
        if($count==1){
            session_start();
            $_SESSION['email']=$row['EMAIL'];
            $_SESSION['psw']=$row['PASSWORD'];
            $_SESSION['id']=$row['ID'];
            header('location:my.php');
        }
        else{
            echo"login unsucessfull";
        }
    
        

    }
    
    // echo $_SESSION['email'];
    
?>