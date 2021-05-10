<?php
function SupprimerVehicule(){
include("connection.php");      
  if(isset($_GET['supprimer']) && !empty($_GET['idvehicule'])){
    echo "je suis là";
      $Supprimer=$pdo->prepare('DELETE FROM vehicule WHERE Id_Vehicule=:Id_Vehicule');
     
      $Supprimer->bindParam(':Id_Vehicule', $_GET['idvehicule'],
      PDO::PARAM_STR);
      $estceoks = $Supprimer->execute();
  
           }
           
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

}


?>

