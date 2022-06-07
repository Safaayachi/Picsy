<?php
include('./db.php');
include('./functions.php');
session_start();
if (isset($_SESSION['user_id']))
  $usersData = $_SESSION['user_id'];

function resize_image($file_name, $max_resolution)
{
  if (file_exists($file_name)) {
    $original_image  = imagecreatefromjpeg($file_name);
    $original_width  = imagesx($original_image);
    $original_height = imagesy($original_image);
    $ratio = $max_resolution / $original_width;
    $new_width = $max_resolution;
    $new_height = $original_height * $ratio;

    if ($new_height > $max_resolution) {

      $ratio = $max_resolution / $original_height;
      $new_height = $max_resolution;
      $new_width = $original_width * $ratio;
    }
    if ($original_image) {
      $new_image = imagecreatetruecolor($new_width, $new_height);
      imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
      imagejpeg($new_image, $file_name, 90);
    }
  }
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));




// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  //get the image info
  $file_name = $_FILES["file"]['name'];
  $img_size = $_FILES["file"]['size'];
  $img_name = $_FILES["file"]['tmp_name'];
  $new_img_name = uniqid("IMG-", true) . '.' . $imageFileType;
  $target_filee = $target_dir . $new_img_name;
  //get the title and description
  $pic_Title = $_POST["pic_Title"];
  $pic_Description = $_POST["pic_Description"];



  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_filee)) {
    echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";

    resize_image($file_name, "500");


    //Insert into Database
    $sql = "INSERT INTO admin_pics(pic_url, pic_Title, pic_Description,User_idd) VALUES ('$new_img_name','$pic_Title','$pic_Description','$usersData') ";
    mysqli_query($conn, $sql);
    header("location: ../Profile.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
