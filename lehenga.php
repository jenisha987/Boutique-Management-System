<?php
include "config.php"; 	
?>
<html>
<head>
	<title>Admin_product</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	
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
		
           
             <li class="active"><a href="lehenga.php">Products</a></li>
			<li class="active"><a href="button1.php">Admin</a></li>
			 <li><a href="index.php">LogOut</a></li>
             
         </B>
         </ul>
      </div>

	

<section class="show-products">
<div class="box-container">	
							<?php
								$select_products = mysqli_query($conn, "SELECT * FROM `lehenga`") or die('query failed');
								if(mysqli_num_rows($select_products) > 0){
									while($fetch_products = mysqli_fetch_assoc($select_products)){
							?>
								<div class="box">
								
								<img src="<?php echo $fetch_products['Image']; ?>" alt="">
								<div class="name"><?php echo $fetch_products['LEHENGA_NAME']; ?></div>
								<div class="price">Rs.<?php echo $fetch_products['PRICE']; ?>/-</div>

								
								<form action="update_table.php" method="POST">
									<button type="submit"  name="dsubmit" class="btn">Update</button>
								</form>

								<form action="delete.php" method="POST">
								<input type="hidden" value="<?php echo $fetch_products['ID']; ?>" name="delete_id" class="btn">
								<input type="hidden"value="<?php echo $fetch_products['Image']; ?>" name="delete_product_image" class="btn">
								<button type="submit"  name="del_product_image" class="btn">Delete</button>
								
								
								</form>
								
									</div>
		   <?php
									}
								}
								else
									{
										echo '<p >No Products</p>';
									}
								?>
									</div>
</section>
</body>
</html>