

<html>
<head>
	<title>Add_Lehenga</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript">
	function validate(){
		
		if(document.f1.product.value==""){
			alert("enter the product name");
			document.f1.product.focus();
			return false;
		}
        if(document.f1.price.value==""){
			alert("enter the product price");
			document.f1.price.focus();
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
		
             <li><a href="lehenga.php">Products</a></li>
			 <li class="active"><a href="button1.php">Admin</a></li>
			 <li><a href="index.php">LogOut</a></li>
             
         </B>
         </ul>
      </div>
				
			<form action="uploadImage.php" method="post" name="f1" onsubmit="return validate()" enctype="multipart/form-data">
	
		<div class="container1">
			<center>
			<p><b><i class="fa fa-plus"></i><br><br>Add Products</b></p>
			<input type="text" placeholder="Products Name" name="product" required></br><br>
			<input type="text" placeholder="cost" name="price" id="price" required></br></br>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Submit" name="submit"></br><br></center></a>
			
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