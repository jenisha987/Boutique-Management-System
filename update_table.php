<?php
    include 'config.php';
?>


<html>
<head>
	<title>Update_Table</title>
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
		
             <li><a href="lehenga.php">Products</a></li>
			
			 
             
             <li class="active"><a href="button1.php">Admin</a></li>
             <li><a href="index.php">Log Out</a></li>
         </B>
         </ul>
      </div>
      <?php
								$select_products = mysqli_query($conn, "SELECT * FROM `lehenga`") or die('query failed');
								if(mysqli_num_rows($select_products) > 0){
									while($fetch_products = mysqli_fetch_assoc($select_products)){
							?>
				
		
			<form action="update.php" method="post" name="f1">
		
				
		<div class="container1">
			<center>
            <input type="hidden" value="<?php echo $fetch_products['ID']; ?>" name="id" class="btn">
			
			<input type="text" name="product_name" value="<?php echo $fetch_products['LEHENGA_NAME']; ?>"  placeholder="Product Name" required>
		</br><br>
		
		<input type="text" name="price" value="<?php echo $fetch_products['PRICE']; ?>" placeholder="Product_Price" required>
		<br><br>
		
		<input type="file" name="image"  placeholder="Upload_Image">
        <input type="hidden" name="old_image" value="<?php echo $fetch_products['Image']; ?>" >
		</br><br>

        <button type="submit"  name="update" class="btn">Insert</button>
		
    </form>
    </div>
    <?php
									}
								}
								else
									{
										
									}
								?>
    
    </div>
	
	
	
</body>
</html>