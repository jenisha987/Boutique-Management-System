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
			 <li><a href="index.php">LogOut</a></li>
             
         </B>
         </ul>
</div>
			<form action="#" method="post">
		<div class="container1">
<a href="add_lehenga_page.php"><center>
<input type="button" class="changeStyle" value="ADD PRODUCTS"></center></a>                                                
<br>
<a href="admin_display_order.php"><center>
<input type="button" class="changeStyle"  value="ORDERED DETAILS"></center></a>                                                
<br>
<a href="admin_display_message.php"><center>
<input type="button" class="changeStyle"  value="MESSAGE DETAILS "></center></a>                                                
<br>
<a href="admin_display.php"><center>
<input type="button" class="changeStyle"  value="REGISTERED DISPLAY "></center></a>                                                
<br>

</div>
</form>
</body>
</html>