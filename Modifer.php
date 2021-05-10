 <?php

 function Modifer(){

    include("connection.php");

    if(isset($_GET['modifier'])   && !empty($_GET['idclient'])  && !empty($_GET['Nomclient']) && !empty($_GET['Prenomclient']) && !empty($_GET['Addressclient']) && !empty($_GET['CodePostale']) && !empty($_GET['villeclient'])  && !empty($_GET['Telph'])){
     
           $modifier = $pdo->prepare('UPDATE client  SET Nom_Client=:Nom_Client, Prenom_Client=:Prenom_Client, Adresse_Client=:Adresse_Client, Ville_Client=:Ville_Client, Code_Postale_Client=:Code_Postale_Client,Tel=:Tel WHERE  id_Client=:id_Client');

           $modifier->bindParam(':id_Client', $_GET['idclient'],
           PDO::PARAM_STR);
         
            $modifier->bindParam(':Nom_Client', $_GET['Nomclient'],
            PDO::PARAM_STR);
              
         
            $modifier->bindParam(':Tel', $_GET['Telph'],
            PDO::PARAM_STR);

           $modifier->bindParam(':Prenom_Client', $_GET['Prenomclient'],
           PDO::PARAM_STR);
         
           $modifier->bindParam(':Adresse_Client', $_GET['Addressclient'],
           PDO::PARAM_STR);

           $modifier->bindParam(':Ville_Client', $_GET['villeclient'],
           PDO::PARAM_STR);

           $modifier->bindParam(':Code_Postale_Client', $_GET['CodePostale'],
           PDO::PARAM_STR);
           echo "je suis là";
           $estceokm = $modifier->execute();
         
}
}
?>


