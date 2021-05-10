<?php
function upload(){
include("connection.php");

          if(isset($_GET['ajouter'])  && !empty($_GET['disponibilite']) && !empty($_GET['idvehicule']) && !empty($_GET['immatriculation']) && !empty($_GET['marquevehicule'])  && !empty($_GET['PrixdeLocation'])   && !empty($_GET['imagevehicule'])){
              
                        $ajouter = $pdo->prepare('INSERT INTO vehicule (Id_Vehicule,Marque_Vehicule,Immatriculation,Image_Vehicule,Prix_Location,Disponibilite) VALUES  (:Id_Vehicule,:Marque_Vehicule,:Immatriculation,:Image_Vehicule,:Prix_Location,:Disponibilite)');
                             

                       $ajouter->bindParam(':Id_Vehicule', $_GET['idvehicule'],
                        PDO::PARAM_STR);
                        $ajouter->bindParam(':Marque_Vehicule', $_GET['marquevehicule'],
                        PDO::PARAM_STR);

                         $ajouter->bindParam(':Immatriculation', $_GET['immatriculation'],
                         PDO::PARAM_STR);

                          $ajouter->bindParam(':Prix_Location', $_GET['PrixdeLocation'],
                         PDO::PARAM_STR);

                         $ajouter->bindParam(':Disponibilite', $_GET['disponibilite'],
                         PDO::PARAM_STR);
                           
                           
                            $ajouter->bindParam(':Image_Vehicule', $_GET['imagevehicule'],
                            PDO::PARAM_STR);
               
                         
                          
               
                            
                            $estceokk = $ajouter->execute();

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

// Check if file already exists
           }


?>
