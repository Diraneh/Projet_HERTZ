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
            <div class="navbar-collapse collapse" style="margin-left:28%">
              <ul class="nav navbar-nav navbar-center ">
                <li>
                  <p class="ml3"><img src="image/OIP-removebg-preview.png" width="100">
                    Administration Client
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
  include("uploader.php");
  include("Ajouter.php");
  include("Modifer.php");
  include("supprimerclient.php");



  ?>

  <section>

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
                  <h4 class="modal-title">Supprimer</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="d-flex form-group">
                      <form method='GET'>
                        <input type="Number" placeholder="idclient" name="idclient" width="25%">
                        <input type="text" placeholder="Nomclient" name="Nomclient" width="25%">
                        <input type="text" placeholder="Prenomclient" name="Prenomclient" width="25%">
                        <input type="text" placeholder="Addressclient" name="Addressclient" width="25%">
                        <input type="text" placeholder="Villeclient" name="villeclient" width="25%">
                        <input type="text" placeholder="CodePostale" name="CodePostale" width="25%">
                        <input type="text" placeholder="Télphonne" name="Telph" width="25%">
                        <button type="submit" value="supprimer" name="supprimer"
                          class="btn btn-primary">Supprimer</button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                      </form>
                      <!-- Modal footer -->

                      <?php


                      supprimerclient();
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
                          <form method='GET'>
                            <input type="Number" placeholder="idclient" name="idclient" width="25%">
                            <input type="text" placeholder="Nomclient" name="Nomclient" width="25%">
                            <input type="text" placeholder="Prenomclient" name="Prenomclient" width="25%">
                            <input type="text" placeholder="Addressclient" name="Addressclient" width="25%">
                            <input type="text" placeholder="Villeclient" name="villeclient" width="25%">
                            <input type="text" placeholder="Télphonne" name="Telph" width="25%">
                            <input type="text" placeholder="CodePostale" name="CodePostale" width="25%">
                            <button type="submit" value="modifier" name="modifier"
                              class="btn btn-primary">Enregistre</button>

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                          </form>

                          <?php



                          Modifer();

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

                <!-- Modal body -->
                <div class="modal-body" id="sup">
                  <div class="container-fluid">
                    <div class="row">
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <div class="d-flex form-group">

                          <form method='GET'>

                            <input type="Number" placeholder="idclient" name="idclient" width="25%">
                            <input type="text" placeholder="Nomclient" name="Nomclient" width="25%">
                            <input type="text" placeholder="Prenomclient" name="Prenomclient" width="25%">
                            <input type="text" placeholder="Addressclient" name="Addressclient" width="25%">
                            <input type="text" placeholder="Villeclient" name="villeclient" width="25%">
                            <input type="text" placeholder="Télphonne" name="Telph" width="25%">
                            <input type="text" placeholder="CodePostale" name="CodePostale" width="25%">
                            <button type="submit" value="ajouter" name="ajouter"
                              class="btn btn-primary">Enregistre</button>

                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <?php



                            Ajouter();

                            ?>

                          </form>
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
    <div class="container-fluid">
      <div class="row">
        <table class="table">
          <tbody>
            <tr>
              <th>Nom </th>
              <th>Prenom </th>
              <th>Ville </th>
              <th>Adresse </th>
              <th>Code Postale </th>
              <th>Numéro de télphonne</th>
              <?php

              recupclient();
              ?>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </section>
  </section>
</body>

</html>