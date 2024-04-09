<?php
    include 'config.php';

//     $name = mysqli_real_escape_string($conn, $_POST['product_name']);
// $price = $_POST['price'];
// $target_dir = "uploaded_img/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


// if(isset($_POST['update'])){
//     $product_id = $_POST['id'];
//     $product_name = $_POST['product_name'];
//     $price = $_POST['price'];

//     $new_image = $_FILES['image']['name'];
//     $old_image = $_POST['old_image'];


// if($new_image!= ''){
//     $update_filename = $_FILES['image']['name'];

// }
// else{
//     $update_filename = $old_image;
// }

// if(file_exists("uploaded_img/" .$_FILES['image']['name'])){
//     $filename = $_FILES['image']['name'];
//     echo "ok";
// }
// else{
//     $sql = "UPDATE lehenga SET LEHENGA_NAME = '$product_name', PRICE = '$price', Image = '$update_filename'
//     WHERE id=$product_id ";
//     $query_num = mysqli_query($conn, $sql);
    
//     if($query_num){
//         if($_FILES['image']['name'] != ''){
//             move_uploaded_file($_FILES["image"]["tmp_name"], "uploaded_img/" .$_FILES["image"]["name"]);
//             unlink("uploaded_img/" .$old_image);
//         }
//         echo "nice";
        
//     }
//     else{
//         echo "no";
//     }
// }
// }


if(isset($_POST['update'])){

    $update_p_id = $_POST['id'];
    $update_name = $_POST['product_name'];
    $update_price = $_POST['price'];
 
    mysqli_query($conn, "UPDATE `lehenga` SET LEHENGA_NAME = '$update_name', PRICE = '$update_price' WHERE ID = '$update_p_id'") or die('query failed');
 
    $update_image = $_FILES['fileToUpload']['name'];
    $update_image_tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $update_image_size = $_FILES['fileToUpload']['size'];
    $update_folder = 'uploaded_img/'.$update_image;
    $update_old_image = $_POST['old_image'];
 
    if(!empty($update_image)){
       if($update_image_size > 2000000){
          $message[] = 'Image file size is too large';
       }else{
          mysqli_query($conn, "UPDATE `LEHENGA` SET Image = '$update_folder' WHERE id = '$update_p_id'") or die('query failed');
          move_uploaded_file($update_image_tmp_name, $update_folder);
          unlink('uploaded_img/'.$update_old_image);
       }
    }
 
    echo "yes";
    // header('location:admin_products.php');
 
 }
?>