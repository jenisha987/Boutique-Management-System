<html>
<head>
	<title>sign</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript">
	function validate(){
		var x=document.f1.email.value;
			var atpos=x.indexOf('@');
			var dotpos=x.lastIndexOf('.');
			if((x=="")||(atpos<1||dotpos<atpos+2||dotpos+2>=x.length)){
				alert("enter valid email");
				document.f1.email.focus();
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
		<li class="active"><a href="sign in.php" >User</a></li>
         
             <li><a href="admin.php">Admin</a></li>
             
         </B>
         </ul>
      </div>
				
			<form action="login.php" method="post" name="f1" onsubmit="return validate()">
	
		<div class="container1">
			<center>
			<p><b><i class="fa fa-lock"></i><br><br>Please sign in with your own id.</b></p>
			<input type="text" placeholder="Your id" name="email" required></br><br>
			<input type="password" placeholder="Enter password" name="psw" required></br></br>
			<input type="submit" value="Sign In" name="submit"></br><br></center></a>
			<p><b>Don't have an account?<a href="register.php">Register</a>.</b></p><br>
			
		</div></div>
	</form>


</body>
</html>