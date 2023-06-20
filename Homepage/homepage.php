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

    <body>
        <div class="container">
            
            <!-- HEADER -->
            <?php include("./header-home.php"); ?>
            
            <!-- SEZIONE CENTRALE -->
            <div class="upper">
                <div class="column-upper-right">
                    <h1>SIAMO LIETI DI AIUTARVI</h1>

                    <p>I servizi che offriamo sono molteplici, spaziano dalla semplice chiacchierata alle commissioni fino ad aiuti in ambito sanitario</p>
                    
                    <button class="button1">
                        <a href="./chi-siamo.php">SCOPRICI</a>
                    </button>

                    <button class="button2">
                        <a href="./prenota.php">PRENOTA</a>
                    </button>
                </div>
            </div>
            
            <div class="central">
                <div class="column-central-left">
                    <h1>AIUTACI A FARE LA DIFFERENZA!</h1>
                    
                    <button class="button3">
                        <a href="./chi-siamo.php">UNISCITI!</a>
                    </button>
                </div>
            </div>
            
            <div class="contatti">
                <h1>Dove puoi contattarci?</h1>

                <div class="riga">
                    <div class="contatto1" id="centralino">
                        <h2>Centralino</h2><p>0420-69-90-104</p>
                    </div>

                    <div class="contatto2" id="e-mail">
                        <h2>E-mail</h2>
                        <p>assistenza.anziani@gmail.com</p>
                    </div>

                    <div class="contatto3" id="dove_siamo">
                        <h2>Dove Siamo</h2>
                        <p>Via Roma, 208</p>
                    </div>
                </div>
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>