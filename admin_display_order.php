<html>
    <head>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
	.changeStyle{
		border-radius: 20px;
		width: 20rem;
		height:4rem;
		font-weight:bold;
		color:white;
		background-color:black;
	}

	.changeStyle:hover{
	font-size:15px;
	}

	</style>


</head>
<body>
<div id="box">
<div id="header"><img src="logo_boutique2.png" id="logoimage">
		<div class="wavy">
	 	<span style="--i:1" ><B>SKJ</B></span>
	 	<span style="--i:2"><I>Boutique</I></span>
	 	<span style="--i:3"><b>Collection</b></span>
	 	</div>
	</div>
	
	<div class="navbar">
		<ul><B>
		
            
             <li><a href="lehenga.php">Products</a></li>
             
             <li class="active"><a href="button1.php">Admin</a></li>
             
         </B>
         </ul>
</div>
		
			<form action="#" method="post">
		<div class="container1" width="500px">
            <center>
    <table border=2 width="1px" cellspacing="15px" >
        <tr >
            <th>ID</th>
            <th>customer_name
			</th>
            <th>product_name</th>
			<th>quantity</th>
			<th>total_amt</th>
</tr>
            <?php
include('config.php');
error_reporting(0);
$query="SELECT * FROM skjorder";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
// echo $result['ID']." ".$result['NAME']." ".$result['EMAIL']." ".$result['PHONE']." ".$result['ROLL'];
// echo $total;
if($total!=0)
{
    // $result=mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data)))
    {
     echo "
     <tr>
     <td>".$result['ID']."</td>
     <td>".$result['CUSTOMER_NAME']."</td>
     <td>".$result['PRODUCT_NAME']."</td>
	 <td>".$result['QUANTITY']."</td>
	 <td>".$result['TOTAL_PAYMENT']."</td>
     ";
    }
}
else{
    echo"
    <tr>
    <th colspan='6'>no record found</th>
    </tr>
    ";
}
?>
</table></center>
</form>
<br>
<a href="add_lehenga_page.php"><center>
<input class="changeStyle" type="button" value="ADD PRODUCTS"></center></a>                                
<br>
<a href="admin_display.php"><center>
<input class="changeStyle" type="button" value="REGISTERED DETAILS"></center></a>                         
<br>
<a href="admin_display_message.php"><center>
<input type="button" class="changeStyle" value="MESSAGE DETAILS"></center></a><br>
<a href="index.php"><center>
<input type="button" class="changeStyle" style="background-color:maroon" value="LOG OUT"></center></a>
</div>
</div>
</body>
</html>