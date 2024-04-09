<?php
session_start();
// if(isset($_POST['order']))
// {
// // $product = $_POST['product'];
// // $price = $_POST['price'];
// $_SESSION['product']=$_POST['product_name'];
// $_SESSION['price']=$_POST['product_price'];
// $product = 
//}
// session_start();
// $user_id = $_SESSION["uname"];
// if(!isset($user_id))
//     {
//         header('location:sign in.php');
//     }
// else
//     {
//         include "login.php";
//     }

        include "config.php";
    $product = $_POST['product_name'];
    $price = $_POST['product_price'];
    $buyername = $_POST['buyername'];   
?> 

<html>
    <title>Add_to_Cart</title>
        <meta name="viewport" content="device-width,initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript">
            function calculate(x)
                {
                    ob=document.getElementById('uprice').value;
                    
                    total_cost=x*ob;
                    document.getElementById('cost').value = total_cost;
                    
                    // let uprice =
                    // alert (uprice);
                    // totalprice = parseInt(x) * parseInt(uprice);
                    // document.getElementById('cost').value = totalprice;
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
			
			
			 <li ><a href="contact us.php">Contact Us</a></li>
             
             <li><a href="index.php">Log Out</a></li>
             
         </B>
         </ul>
      </div>
				
		
			<form action="ordertable.php" method="get" name="f1" onsubmit="return validate()">
		
				
		<div class="container1">
			<center>
			<p><b><i class="fa fa-cart"></i><br><br><br>
            <table class="table-design" border="1" cellspacing="0" cellpadding="10" width="500px"> 
                <tr>
                    <td>Buyer's Name:</td>
                    <td><?php echo $buyername ?></td>
                    <input type="hidden" name="name" value="<?php echo $buyername ?>">
                </tr>
                <tr>
                    <td> Product Name:</td>
                    <td><input type="text"   width="50px" value="<?php echo $product?>"></td>
                    <!-- <td> </td> -->
                    <input type="hidden" value="<?php echo $product?>" name="pname" id="pname">
                </tr>
                <tr>
                    <td>Unit Price:</td>
                    <td><input type="text"  value="<?php echo $price?>"></td>
                    
                    <input type="hidden" value="<?php echo $price;?>" id="uprice" name="uprice">
                </tr>
                <tr>
                    <td>Product Quantity:</td>
                  <td>  <input type = "text" class="form-control text-end" value="0" id="quantity" name="quantity" onkeyup="calculate(this.value);">  </center></td>

                </tr>
                <tr>
                    <td>Total</td>
                  <td>  <input type="text" id="cost" name="cost" value="0"></td>
                </tr>
                <!-- <tr>
                    <td><a href="lehenga.php"><input type="button" value="lehenga"></a></td>
                    <td><a href="suit.php"><input type="button" value="suit"></a></td>
                </tr> -->
                <tr>
                    <!-- <td><a href="suit.php">Add More</a></td> -->
                    <td><input type="submit" value="Final Order"></td>
                </tr>
            </table>
        </form>                    
                            
                        </div>
                    </form>
                </div>
            </div>   
        </form>
        </div>
        </div>
    </body>
</html>