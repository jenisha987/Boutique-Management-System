<?php
session_start();
include "config.php"; 	
$email = $_SESSION["email"];
$select_name = mysqli_query($conn,"SELECT * FROM REGISTER WHERE EMAIL='$email'");
$display = mysqli_fetch_assoc($select_name);


?>
<html>
<head>
	<title>User_Product</title>
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
             <li class="active"><a href="user_lehenga.php">Products</a></li>
			 <!-- <li><a href="kurtha.php">Kurtha</a></li>
             <li><a href="suit.php">Suits</a></li>
			 <li><a href="baby.php">Babies</a></li> -->
			
			 <li><a href="contact us.php">Contact Us</a></li>
             
            
             <li><a href="index.php">Log Out</a></li>
             
         </B>
         </ul>
      </div>

      <section class="products">

<h1 class="title">Our products</h1>

<div class="box-container">

   <?php  
      $select_products = mysqli_query($conn, "SELECT * FROM `lehenga`") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
  <form action="add_to_cart.php" method="post" class="box">
   <img class="image" src="<?php echo $fetch_products['Image']; ?>" alt="">
   <div class="name"><?php echo $fetch_products['LEHENGA_NAME']; ?></div>
   <div class="price">Rs.<?php echo $fetch_products['PRICE']; ?>/-</div>
   <input type="hidden" name="product_name" value="<?php echo $fetch_products['LEHENGA_NAME']; ?>">
   <input type="hidden" name="product_price" value="<?php echo $fetch_products['PRICE']; ?>">
   <input type="hidden" name="product_image" value="<?php echo $fetch_products['Image']; ?>">
   <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   <input type="hidden" name="lid" value="<?php echo $fetch_products['ID'];?>" >
   <input type="hidden" name="buyername" value="<?php echo $display["NAME"]; ?>">
  </form>
   <?php
      }
   }else{
      echo '<p class="empty">No products added yet!</p>';
   }
   ?>
</div>
<!-- </div> -->
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
				<i class="fa fa-angle-right"></i> <a href="#">Ladies</a><br><br>
				<i class="fa fa-angle-right"></i> <a href="#">Gents</a><br><br>
				<i class="fa fa-angle-right"></i> <a href="#">Babies</a><br><br>
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
		<p class="foot">copyright &copy;2020 codeOpacity.designed by <span><b>AmitirK</span></p>
	</div>

</section>
</body>
</html>