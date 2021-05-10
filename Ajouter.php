<?php
 

    


function Ajouter(){

    
                             
    include("connection.php");
 
        if(isset($_GET['ajouter'])   && !empty($_GET['idclient'])  && !empty($_GET['Nomclient']) && !empty($_GET['Prenomclient']) && !empty($_GET['Addressclient']) && !empty($_GET['CodePostale']) && !empty($_GET['villeclient']) && !empty($_GET['Telph'])){
      
               
                  
  
                            $ajouter = $pdo->prepare('INSERT INTO client (id_Client,Nom_Client,Prenom_Client,Adresse_Client,Ville_Client,Code_Postale_Client,Tel ) VALUES  (:id_Client,:Nom_Client,:Prenom_Client,:Adresse_Client,:Ville_Client,:Code_Postale_Client,:Tel)');
                           
                                
                            $ajouter->bindParam(':id_Client', $_GET['idclient'],
                            PDO::PARAM_STR);
                          
                             $ajouter->bindParam(':Nom_Client', $_GET['Nomclient'],
                             PDO::PARAM_STR);

                             $ajouter->bindParam(':Tel', $_GET['Telph'],
                             PDO::PARAM_STR);
                               
                               
                          
               
                            $ajouter->bindParam(':Prenom_Client', $_GET['Prenomclient'],
                            PDO::PARAM_STR);
                            echo "je suis là";
                           

                           


                            $ajouter->bindParam(':Adresse_Client', $_GET['Addressclient'],
                            PDO::PARAM_STR);

                          

                            $ajouter->bindParam(':Ville_Client', $_GET['villeclient'],
                            PDO::PARAM_STR);

                            $ajouter->bindParam(':Code_Postale_Client', $_GET['CodePostale'],
                            PDO::PARAM_STR);
                            $estceok = $ajouter->execute();
                          

                           

                          
              
         

        }
     }
?>




  