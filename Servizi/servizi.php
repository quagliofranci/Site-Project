<?php
    include("../aggiorna-cookie.php");
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento - Servizi</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Pagina dedicata aai servizi offerti dai volontari di 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./servizi.css"/>
        <script src="./servizi.js"></script>
    </head>

    <body style="background-color: #11009E;">
        <div class="container">
            <?php include("../Homepage/header.php"); ?>

            <h1>I nostri servizi</h1>

            <div class="descrizione-servizi">
                <div class="row1">
                    <div class="left-column1">
                        <h2>Compagnia</h2>

                        <p>
                            Offriamo una compagnia a chiunque, che si tratti di scambiare una chiacchierata o fare una passeggiata
                        </p>
                    </div>

                    <div class="right-column1">
                        <img src="../images/servizi2.jpg"/>
                    </div>
                </div>

                <div class="row2">
                    <div class="left-column2">
                        <img src="../images/image.png"/>
                    </div>

                    <div class="right-column2">
                        <h2>Commissioni</h2>

                        <p>
                            Possiamo effettuare commissioni per voi, come la spesa o il pagamento di una bolletta o simili
                        </p>
                    </div>
                </div>
                
                <div class="row3">
                    <div class="left-column3">
                        <h2>Assistenza sanitaria</h2>

                        <p>
                            Offriamo anche aiuti specializzati nell'ambito medico per tutti coloro che necessitano un'assistenza medica
                        </p>
                    </div>

                    <div class="right-column3">
                        <img src="../images/servizi.jpg"/>
                    </div>
                </div>
            </div>

            <div class="prenota">
                <h2>
                    Vuoi prenotare un nostro servizio?</br>
                    Clicca qui!</br>

                    <i class="fa fa-arrow-down"></i>
                </h2>

                <a href="../Prenota/prenota.php"><button class="prenota-btn">Prenota</button></a>
            </div>

            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>