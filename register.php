<html>
<head>
	<title>quick forum</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script type="text/javascript">
		function validate(){
			var x=document.f1.email.value;
			var atpos=x.indexOf('@');
			var dotpos=x.lastIndexOf('.');
			var firstpassword=document.f1.psw.value;
			var secondpassword=document.f1.psw1.value;
			if(document.f1.name.value==""){
				alert("enter the name");
				document.f1.name.focus();
				return false;
			}
			
			if(document.f1.number.value==""){
				alert("enter your number");
				document.f1.number.focus();
				return false;
			}
			if((x=="")||(atpos<1||dotpos<atpos+2||dotpos+2>=x.length)){
				alert("enter valid email");
				document.f1.email.focus();
				return false;
			}
			
			if(firstpassword==""){
				alert("enter strong password");
				document.f1.psw.focus();
				return false;
			}
			if(firstpassword==secondpassword){
			return true;
		}
		else{
			alert("password must be same!");
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
	
	<!-- <div class="navbar">
		<ul><B>
		<li><a href="my.php" >Home</a></li>
             <li ><a href="About us.php">About Us</a></li>
             <li><a href="lehenga.php">Lehenga</a></li>
			 <li><a href="kurtha.php">Kurtha</a></li>
             <li><a href="suit.php">Suits</a></li>
			 <li><a href="baby.php">Babies</a></li>
			
			 <li><a href="contact us.php">Contact Us</a></li>
             
             <li><a href="admin.php">Admin</a></li>
         </B>
         </ul>
      </div> -->
				<div class="menu">
					
				</div>
				
		<div class="container1">
			
			<form action="dbregister.php" method="GET" name="f1" onsubmit="return validate()">
			
			<p><b><i class="fa fa-home"></i><br><br>Register</b></p><center><br><br>
			<input type="text" placeholder="Your name" name="name" required><br><br>
			<input type="text" placeholder="Your email address" name="email" required><br></br>
			<input type="text" placeholder="Your phone number" name="number" required><br><br>
			
			<input type="password" placeholder="Enter password" name="psw" required></br></br>
			<input type="password" placeholder="Repeat password" name="psw1" required><br>	</br>
    		 <input type="submit" value="Submit"></center></a>
            </form><br>
			<p><b>By creating an account you agree to our Terms & policy.</b></p><br>
			
			<p><b>Already have an account?<a href="index.php">   Sign in</a>.</b></p><br>
			
</div></div>
</body>
</html>