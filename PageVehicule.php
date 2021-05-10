<!DOCTYPE html>
<html lang="Fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HERTZ</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <header>
    <section style="background-color: black;">
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-sm">
            <br><br>
            <div class="navbar-collapse collapse" style="margin-left:25%">
              <ul class="nav navbar-nav navbar-center ">
                <li>
                  <p class="ml3"><img src="image/OIP-removebg-preview.png" width="25%">
                    Administration Vehicule</p>
                </li>
              </ul>
            </div>
            <hr style="margin-top: 20px; margin-bottom: 10px; border: 0;border-top: 8px solid #fff702;">
          </nav>
        </div>
        <center>
          <button type="submit" class="btn btn-primary btn-lg">
            <a href="PageAcceuil.php" style="color:black">Page d'Acceuil</a>
          </button>
          <button type="submit" class="btn btn-primary btn-lg">
            <a href="PageClientHertz.php" style="color:black">Fiche Client</a>
          </button>
          <button type="submit" class="btn btn-primary btn-lg">
            <a href="PageVehicule.php" style="color:black">Location Vehicule</a>
          </button>
          <button type="submit" class="btn btn-primary btn-lg">
            <a href="projet.php" style="color:black">Historique</a>
          </button>
         </center>
          </div>
          </div>
          </div>
          </div>
    </section>

  </header>

  <?php
  include("connection.php");
  include("recupclient.php");
  include("upload.php");
  include("SupprimerVehicule.php");
  ?>

  <section style="background-color:white">
  <div class="container">
   <div class="row">
        <div class="col-xs-4 col-4">

          <!-- Button to Open the Modal -->
          <button id="Supprimer" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myyyyModal">
            Supprimer
          </button>
          <!-- The Modal -->
          <div class="modal" id="myyyyModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">SUPPRIMER</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" id="sup">
                  <div class="container-fluid">
                    <div class="d-flex form-group">
                      <form method='GET'>
                        <input type="text" placeholder="idvehicule" name="idvehicule" width="25%">
                        <input type="text" placeholder="immatriculation" name="immatriculation" width="25%">
                        <input type="text" placeholder="MarqueVehicule" name="marquevehicule" width="25%">
                        <input type="text" placeholder="PrixdeLocation" name="PrixdeLocation" width="25%">
                        <input type="file" placeholder="imagevehicule" name="imagevehicule" width="25%">
                        <input type="file" placeholder="Disponibilite" name="disponibilite" width="25%">
                        <button type="submit" value="supprimer" name="supprimer"
                          class="btn btn-primary">Supprimer</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </form>
                      <?php
                        SupprimerVehicule();

                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-4">
          <!-- Button to Open the Modal -->
          <button id="Modifier" type="button" class="btn btn-success" data-toggle="modal" data-target="#myyModal">
            Modifier
          </button>

          <!-- The Modal -->
          <div class="modal" id="myyModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Modifier</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="sup">
                  <div class="container-fluid">
                    <div class="row">

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <div class="d-flex form-group">
                          <form method="GET">
                            <input type="text" placeholder="idvehicule  " name="idvehicule" width="25%">
                            <input type="text" placeholder="immatriculation" name="immatriculation" width="25%">
                            <input type="text" placeholder="MarqueVehicule" name="marquevehicule" width="25%">
                            <input type="text" placeholder="PrixdeLocation" name="PrixdeLocation" width="25%">
                            <input type="file" placeholder="imagevehicule" name="imagevehicule" width="25%">
                            <input type="file" placeholder="Disponibilite" name="disponibilite" width="25%">
                            <button type="submit" value="modifier" name="modifier"
                              class="btn btn-primary">Enregistre</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                          </form>
                          <?php


                          include("ModifierVehicule.php");
                          ModifierVehicule();

                          ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-4 col-4">
          <!-- Button to Open the Modal -->
          <button id="Modifier" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mModal">
            Ajouter
          </button>
          <!-- The Modal -->
          <div class="modal" id="mModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Ajouter</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="sup">
                  <div class="container-fluid">
                    <div class="row">
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <div class="d-flex form-group">
                          <CENTER>
                            <form method="GET">
                              <input type="text" placeholder="idvehicule  " name="idvehicule" width="25%">
                              <input type="text" placeholder="immatriculation" name="immatriculation" width="25%">
                              <input type="text" placeholder="MarqueVehicule" name="marquevehicule" width="25%">
                              <input type="text" placeholder="PrixdeLocation" name="PrixdeLocation" width="25%">
                              <input type="file" placeholder="imagevehicule" name="imagevehicule" width="25%">
                              <input type="file" placeholder="Disponibilite" name="disponibilite" width="25%">
                              <button type="submit" value="ajouter" name="ajouter"
                                class="btn btn-primary">Enregistre</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Ferme</button>
                            </form>
                          </CENTER>
                          <?php
                          upload();

                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <section style=" padding-top:3%">
    <table class="table table-striped table-hover">
      <thead>
      <tbody>
        <tr>


          <th>Photo </th>
          <th>Marque </th>
          <th>Immatriculation </th>
          <th>Prix de Location</th>

          <?php

          recupVehicule();


          ?>

        </tr>
      </tbody>
      </thead>

    </table>
    </div>
  </section>

</body>

</html>