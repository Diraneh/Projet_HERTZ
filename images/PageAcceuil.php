<!DOCTYPE html>
<html lang="Fr">

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

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <link rel="stylesheet" href="css/owl.theme.min.css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="index.css">




</head>

<body>

    <section>
        <header>
            <div class="container-fluid">
                <div class="row">

                    <div class="prem">
                        <nav class="navbar navbar-expand-sm" >
                            <br><br>

                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-left" style="margin-right:20px;margin-top:-45px">
                                    <li >
                                        <img src="image/OIP-removebg-preview.png" width="100">

                                    </li>
                                </ul>

                                <ul class="nav navbar-nav navbar-center" style="margin-left:45%;margin-top:-35px">
                                    <li>
                                        <p class="ml4">
                                            Bienvenue
                                    </li>

                                </ul>
                                <center>
                                    <button type="submit" href="login.php" class="btn btn-primary btn-lg" style="margin-left:90%; margin-top:-95px">
                                        <a href="login.php" style="color:black">Connection</a>
                                    </button>

                                </center>

                            </div>

                        </nav>
                    </div>
                </div>
            </div>
            </div>
            </div>

        </header>
    </section>

    <?php


include("connection.php");
include("recupclient.php");
include("upload.php");
include("uploader.php");
include("SendEmail.php")


?>
    <section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <table class="table">
                        <tbody>
                            <thead>
                            <tr>
                                <th width="5%">Photo</th>
                                <th width="5%">Année</th>
                                <th width="5%">Prix de Location</th>
                                <th width="5%">Marque</th>
                                <th width="5%">Disponibilité</th>
                                </tr>
                            </thead>
                        
                   
             <?php 
            
                recupdispo();
             
      
               ?>      
                     </tbody>     
                      </table>   

                </div>
            </div>
        </section>

        <section>
            <div id="services" class="content-block">
                <div id="numbers" class="parallax">
                    <div class="overlay">
                        <!-- title -->
                        <div class="container-fluid numbers-title">
                            <div class="container">
                                <div class="row block-heading">
                                    <h1>Quelques chiffres en statistique</h1>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <!-- number list -->
                            <ul class="numbersList">
                                <li class="col-md-2 col-sm-4 col-xs-6">
                                    <h4 style="color:black"> Voiture en location </h4>
                                    <span id="number1" class="count1 count-timer">101</span>
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-6">
                                    <h4 style="color:black"> Voiture disponible</h4>
                                    <span id="number2" class="count2">92</span>
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-6">
                                    <h4 style="color:black"> Nombre d'agence en international</h4>
                                    <span id="number4" class="count4">99</span>
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-6">
                                    <h4 style="color:black"> Modèle hybride </h4>
                                    <span id="number3" class="count3">54</span>
                                </li>

                                <li class="col-md-2 col-sm-4 col-xs-6">
                                    <h4 style="color:black"> Modèle électrique </h4>
                                    <span id="number4" class="count4">99</span>
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-6">
                                    <h4 style="color:black"> Client Satisfait </h4>
                                    <span id="number6" class="count6">1000</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
           
           

            
                    <div class="content-block" id="contact">
                        <div class="overlay-3">
                            <header class="block-heading cleafix text-center">
                                <h1 style="color:black">Contact Nous</h1>
                                <!-- <p>Feel Free to Contact</p> -->
                            
                            </header>
                                <div class="container">
                                   
                                      
                                            <form class="contact-form" method="POST">
                                                <input type="text" name="name" placeholder="Nom" >
                                                <input type="email" name="email" placeholder="Email" >
                                                <textarea rows="5" name="message" placeholder="Veuillez laisser vos messages..."></textarea>
                                                <input type="submit"  name="submit" value="Envoyer">
                                            </form>

                                        </div>
                                    </div>
                                    <?php

                                       SendEmail();

                                    ?>


                        
                                    </div>

                                </div>
                            </div>
                        </div>
        </section>
        <section>
            <footer class="mainfooter" role="contentinfo">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Follow Us</h4>
                                <ul class="social-network social-circle">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                            <div class="col-md-6">
                                <p>38 Rue de Dijon, 033154897533 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 copy">
                                <p class="text-center">&copy; Copyright 2020 - Hertz. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
</body>

</html>