<?php
    session_start();
    include("../aggiorna-cookie.php");
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Un sito dedicato al volontariato verso gli anziani."/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./homepage.css"/>
    </head>

    <body>
        
        <div class="container">
            
            <!-- HEADER -->
            <?php include("./header.php"); ?>
            
            <!-- SEZIONE CENTRALE -->
            <div class="upper">
                <div class="column-upper-right">
                    <h1>SIAMO LIETI DI AIUTARVI</h1>

                    <p>I servizi che offriamo sono molteplici, spaziano dalla semplice chiacchierata alle commissioni fino ad aiuti in ambito sanitario</p>
                    
                    <button class="button1">
                        <a href="../Chi-Siamo/chi-siamo.php">SCOPRICI</a>
                    </button>

                    <button class="button2">
                        <a href="../Prenota/prenota.php">PRENOTA</a>
                    </button>
                </div>
            </div>
            
            <div class="central">
                <div class="column-central-left">
                    <h1>AIUTACI A FARE LA DIFFERENZA!</h1>
                    
                    <button class="button3">
                        <a href="../Chi-Siamo/chi-siamo.php">UNISCITI!</a>
                    </button>
                </div>
            </div>
            
            <div class="contatti">
                <h1>Dove puoi contattarci?</h1>

                <div class="riga">
                    <div class="contatto1" id="centralino">
                        <a href="tel:0420-69-90-104" class="fa fa-phone" style="text-align: center;">
                            <h2>Centralino</h2>
                            <p>0420-69-90-104</p>
                        </a>
                    </div>

                    <div class="contatto2" id="e-mail">
                        <a href="mailto:assistenza.anziani@gmail.com" target="_blank" class="fa fa-envelope" style="text-align: center;">
                            <h2>E-mail</h2>
                            <p>assistenza.anziani@gmail.com</p>
                        </a>
                    </div>

                    <div class="contatto3" id="dove-siamo">
                        <a href="https://maps.google.com" target="_blank" class="fa fa-map" style="text-align: center;">
                            <h2>Dove Siamo</h2>
                            <address>Via Roma, 208</address>
                        </a>
                    </div>
                </div>
            </div>
            
            <hr class="divider">

            <?php include("./footer.php"); ?>
        </div>
    </body>
</html>