<html>
<head>
	<title>Admin_sign</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript">
	function validate(){
		if(document.f1.roll.value==""){
			alert("enter your valid id");
			document.f1.roll.focus();
			return false;
		}
		if(document.f1.pasw.value==""){
			alert("enter your number");
			document.f1.psw.focus();
			return false;
		}
		alert("all fields are filled");
		exit();
	}
</script>
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
		
		<li><a href="index.php">User</a></li>
	<li class="active"><a href="admin.php">Admin</a></li>
             
         </B>
         </ul>
</div>
				
		
			<form action="admin_check.php" method="post" name="f1" onsubmit="return validate()">
	
		<div class="container1">
			<center>
			<p><i class="fa fa-lock"></i><br></p>
			<input type="text" placeholder="Your id" name="admin_id" maxlength="7"required></br><br>
			<input type="password" placeholder="Enter password" name="password" required></br></br>
			<input type="submit" value="Submit"/></br><br></center></a>
			
		</div></div>
	</form>
	<!-- <div class="footer1-content">
		<h1>My Foody Home</h1>
		<p>Contact us</p>
		<ul class="socials1">
			<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
		</ul>
		<p>copyright &copy;2020 codeOpacity.designed by <span><b>AmitirK</span></p>
</div> -->

</body>
</html>