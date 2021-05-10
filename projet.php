<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hertz</title>
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
                    Administration Historique
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
  ?>
  <section style=" padding-top:3%">
    <div class="container-fluid">
      <div class="row">
        <table class="table">
          <tbody>

            <tr>
              <th>Photo</th>
              <th>Nom Client</th>
              <th>Prenom Client</th>
              <th>Adresse Client</th>
              <th>Date_Debut_Location</th>
              <th>Date_Fin_Location</th>
              <th>Prix de Location</th>
              <th>Marque</th>
              <th>Immatriculation</th>

          <tbody>
            <?php
              recuphoto();
            ?>

            </tr>
            </thead>
          <tbody>
        </table>
      </div>
  </section>
  </section>
</body>

</html>