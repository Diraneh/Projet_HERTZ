<?php
function ModifierVehicule(){
include("connection.php");
   if(isset($_GET['modifier'])  && !empty($_GET['disponibilite']) && !empty($_GET['idvehicule']) && !empty($_GET['immatriculation']) && !empty($_GET['marquevehicule'])  && !empty($_GET['PrixdeLocation'])   && !empty($_GET['imagevehicule'])){
      $modifier = $pdo->prepare('UPDATE vehicule SET Marque_Vehicule=:Marque_Vehicule,Immatriculation=:Immatriculation,Image_Vehicule=:Image_Vehicule,Prix_Location=:Prix_Location,Disponibilite=:Disponibilite WHERE Id_Vehicule=:Id_Vehicule');
         

      echo "je suis là";

      $modifier->bindParam(':Id_Vehicule', $_GET['idvehicule'],
      PDO::PARAM_STR);
      $modifier->bindParam(':Marque_Vehicule', $_GET['marquevehicule'],
      PDO::PARAM_STR);

      $modifier->bindParam(':Immatriculation', $_GET['immatriculation'],
      PDO::PARAM_STR);

        $modifier->bindParam(':Prix_Location', $_GET['PrixdeLocation'],
       PDO::PARAM_STR);

       $modifier->bindParam(':Disponibilite', $_GET['disponibilite'],
       PDO::PARAM_STR);
   
       $modifier->bindParam(':Image_Vehicule', $_GET['imagevehicule'],
          PDO::PARAM_STR);

       $estceok = $modifier->execute();
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
