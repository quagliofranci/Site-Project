<?php
    session_start();
    // include(../aggiorna_cookie.php);
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento</title>
        <meta charset="utf-8">
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Un sito dedicato al volontariato verso gli anziani."/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="./images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./homepage.css"/>
    </head>

    <body style="background-image:url(./images/homepage2.jpg); background-position: center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            
            <!-- HEADER -->
            <?php include("./header-home.php"); ?>
            
            <!-- SEZIONE CENTRALE -->
            <div class="row">
                <div class="column right">
                    <h1>AIUTACI A FARE LA DIFFERENZA!</h1>
                    
                    <button class="button" href="./chi-siamo.php">
                        UNISCITI!
                    </button>
                </div>
                
            </div>
            
            <!--
            <div class="contatti">
                <h1>Dove puoi contattarci?</h1>

                <div class="riga">
                    <div class="Centralino" id="centralino" style="width: 200px; height: 100px;">
                        <p class="descrizione" id="descrizione1" style="display:block">Centralino</br>0420-69-90-104</p>
                    </div>

                    <div class="E-mail" id="e-mail" style="width: 200px; height: 100px;">
                        <p class="descrizione" id="descrizione2" style="display:block">E-mail</br>assistenza-anziani@gmail.com</p>
                    </div>

                    <div class="Dove Siamo" id="dove_siamo" style="width: 200px; height: 100px;">
                        <p class="descrizione" id="descrizione3" style="display:block">Dove Siamo</br>Via Roma, 208</p>
                    </div>
                </div>
            </div>
            -->
        </div>
    </body>
</html>