<?php

            
function supprimerclient(){
  include("connection.php");
 
  if(isset($_GET['supprimer']) && !empty($_GET['idclient'])){
    echo "je suis là";
      $Supprimer=$pdo->prepare('DELETE FROM client WHERE id_Client=:id_Client');
     
      $Supprimer->bindParam(':id_Client', $_GET['idclient'],
      PDO::PARAM_STR);
    
     
      $estceoks = $Supprimer->execute();
    

     

    



}
}
?>
