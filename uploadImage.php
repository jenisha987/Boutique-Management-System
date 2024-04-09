<?php
include "config.php";
$name = mysqli_real_escape_string($conn, $_POST['product']);
$price = $_POST['price'];
$target_dir = "uploaded_img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// echo $target_file."<br>";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    include "add_lehenga_page.php";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    include "add_lehenga_page.php";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    include "add_lehenga_page.php";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "avif" && $imageFileType != "webp" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  include "add_lehenga_page.php";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  include "add_lehenga_page.php";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo'<script>alert("Products Inserted Successfuly!");
    window.location.href="lehenga.php";
</script>';

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$add_product_query = mysqli_query($conn, "INSERT INTO lehenga(lehenga_name, price, image) VALUES('$name', '$price', '$target_file')") or die('query failed');

// if(isset($_GET['delete'])){
//   $delete_id = $_GET['delete'];
//   $delete_image_query = mysqli_query($conn, "SELECT image FROM `lehenga` WHERE id = '$delete_id'") or die('query failed');
//   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
//   unlink('uploaded_img/'.$fetch_delete_image['image']);
//   mysqli_query($conn, "DELETE FROM `lehenga` WHERE id = '$delete_id'") or die('query failed');
//   header('location:lehenga.php');
// }


?>

<html>
    <body>
        <img src="<?php echo $target_file ?>" alt="">
    </body>
</html>