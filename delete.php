<?php
include 'config.php';

if(isset($_POST['del_product_image'])){
    $id = $_POST['delete_id'];
    $product_image = $_POST['delete_product_image'];
    $sql = "DELETE FROM `lehenga` WHERE ID = '$id'";
    $query_num = mysqli_query($conn, $sql);
    if($query_num){
        unlink('uploaded_img/'.$product_image);
        echo'<script>alert("Product Deleted Successfully");
window.location.href="lehenga.php";</script>';
}

    
    else{
        echo "no";
    }
}
?>
