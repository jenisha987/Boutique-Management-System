<html>
<head>
	<title>contact</title>
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		function validate(){
			var x=document.f1.email.value;
			var atpos=x.indexOf('@');
			var dotpos=x.lastIndexOf('.');
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
			if(document.f1.id.value==""||document.f1.id.value==""){
				alert("enter your id");
				document.f1.id.focus();
				return false;
			}
			
			if(document.f1.message.value==""){
				alert("write some message");
				document.f1.message.focus();
				return false;
			}
			
			// alert("all fields are filled");
			// exit();
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
		<li><a href="my.php" >Home</a></li>
             <li ><a href="About us.php">About Us</a></li>
             <li><a href="user_lehenga.php">Products</a></li>
			
			 <li class="active"><a href="contact us.php">Contact Us</a></li>
             
        
             <li><a href="index.php">Log Out</a></li>
         </B>
         </ul>
      </div>
				
		
			<form action="message.php" method="get" name="f1" onsubmit="return validate()">
		
				
		<div class="container1">
			<center>
			<p><b><i class="fa fa-envelope"></i><br><br><br>
			<input type="text" name="name" placeholder="Your Name" required>
		</br><br>
		
		<input type="text" name="number"  placeholder="Your Phone Number" required>
		<br><br>
		
		<input type="text" name="email" placeholder="Your Email"required>
		</br><br>
		
		
		</br><br>
			
				<textarea name="message" cols="60" rows="10"  placeholder="Write some message."></textarea>
				<br>
				<br>
		<input type="submit" value="Send Message"/></br><br></center>
		<p>skjboutiquecollection@gmail.com<p>
		<i class="fa fa-phone"></i>9821987867
		</div></div>
		
	</form>
		
	<div class="last">
		<div class="picture2 p14">
			<p class="last1">SKJ Collection
				<!-- <i class="fa fa-shopping-basket"></i> -->
			</p>
			<br><br><br>
			<p class="last2">Feel Free To Follow Us On Our Social <br><br> Media Handlers All The Links Are
				<br><br> Given Below.
			</p><br><br>
			<ul class="media">
				<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
		<div class="picture2 p15">
			<p class="last1">Contact Info</p>
			<br><br><br />
			<p class="last2"><i class="fa fa-phone"></i>+977-112567890<br><br>
				<i class="fa fa-phone"></i>+977-112876590<br><br>
				<i class="fa fa-envelope"></i> abc12@gmail.com<br><br>
				<i class="fa fa-map-marker"></i> Libali, Bhaktapur
			</p>
		</div>
		<div class="picture2 p16">
			<p class="last1">Quick Links</p>
			<br><br><br/>
			<p class="last3"><i class="fa fa-angle-right"></i> <a href="#">Home</a><br><br>
				<i class="fa fa-angle-right"></i> <a href="#">Products</a><br><br>
				<i class="fa fa-angle-right"></i> <a href="#">About Us</a><br><br>
				<i class="fa fa-angle-right"></i> <a href="#">Contact Us</a><br><br>
			</p>
		</div>
		<div class="picture2 p17">
			<p class="last1">Newsletter</p>
			<br><br><br/>
			<p class="last2">Subscribe For Latest Upadates</p><br>
			<input type="text" placeholder="your email"><br>
			<button class="btn">Subscribe</button>
		</div>
		<hr class="hr">
		<p class="foot">copyright &copy;2023 SKJ Boutique Collection<span><b>All rights reserved.</span></p>
	</div>
	
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
		<h5><center>copyright &copy;2020 codeOpacity.designed by <span><b>AmitirK</span></center></h5>
	</div></div> -->
	
</body>
</html>