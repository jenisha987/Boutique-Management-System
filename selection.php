<?php

include "config.php";
error_reporting(0);
$query="SELECT * FROM lehenga";
$data=mysqli_query($conn,$query);
_
$total=mysqli_num_rows($data);
// echo $result['ID']." ".$result['NAME']." ".$result['EMAIL']." ".$result['PHONE']." ".$result['ROLL'];
// echo $total;
$productname = $total['lehenga_name'];
$selected_img=$total['image'];
$price = $total['price'];
?>