<?php
function uploader(){
include("connection.php");
if(isset($_GET['ajouter'])  && !empty($_GET['imagevehicule'])){
  
      $ajouter = $pdo->prepare('SELECT image_Vehicule FROM vehicule ');
     $ajouter->bindParam(':image_Vehicule', $_GET['imagevehicule'],
                PDO::PARAM_STR);
                $estceok = $ajouter->execute();
// Check if image file is a actual image or fake image
if(isset($_GET["action"])) {
$check = getimagesize($_FILES["image_Vehicule"]["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}
}

// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}

// Check file size
if ($_FILES["image_Vehicule"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["image_Vehicule"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image_Vehiculed"]["name"])). " has been uploaded.";
    } else {
    echo "Sorry, there was an error uploading your file.";
    }
    }
    
    }
    
    }
    ?>
    