<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Pagina dedicata alla prenotazione dei servizi proposti sul sito 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./prenota.css"/>
        <script src="./prenota.js"></script>
    </head>

    <body>
        <div class="container">
            <?php include("../Homepage/header.php"); ?>

            <!-- Form per la prenotazione del servizio -->
            <div class="center">
                <div class="prenota-form">
                    <form id="PrenotaForm" onsubmit="return validateForm();">
                        <div class="form-fieldset">
                            <!-- Città -->
                            <input type="text" class="fieldset" id="city" placeholder="La tua città" required></br></br>
                            <!-- Cap -->
                            <input type="number" class="fieldset" id="cap" pattern = "[0-9]"  placeholder="CAP" required></br></br>
                            
                            <!-- Indirizzo -->
                            <input type="text" class="fieldset" id="address"  placeholder="Il tuo indirizzo" required></br></br>
                            
                            <!-- Cellulare -->
                            <!-- Il pattern inserito impedisce di inserire numeri che siano diversi dal formato scelto -->
                            <input type="tel" class="fieldset" id="cell" pattern="[0-9]{10}" placeholder="Il tuo numero di cellulare" required></br></br></br>
                            
                            <!-- Volontario -->
                            <div class="volontario">
                                <label for="volontario">Scegli un volontario:</label>

                                <select id="volontario">
                                    <option value="0">Nessuna preferenza</option>
                                    <option value="1">Emanuele</option>
                                    <option value="2">Francesco</option>
                                    <option value="3">Matteo</option>
                                    <option value="4">Riccardo</option>
                                </select>
                                
                                <!-- Question mark che reindirizza a "Chi Siamo" per far vedere i volontari -->
                                <a href="../Chi-Siamo/chi-siamo.php" target="_blank"><i class="fa fa-question-circle" style="color: rgb(255, 255, 175)"></i></a>
                            </div>

                            <!-- Servizi -->
                            </br><p>Scegli il servizio di cui vuoi usufruire:</p></br>

                            <input type="radio" class="radio-btn" id="radiobtn" name="servizio" style="vertical-align: middle" required/>
                            <label class="radio-btn" for="radiobtn">Compagnia</label>

                            <input type="radio" class="radio-btn" id="radiobtn" name="servizio" style="vertical-align: middle" required/>
                            <label class="radio-btn" for="radiobtn">Commissione</label>

                            <input type="radio" class="radio-btn" id="radiobtn" name="servizio" style="vertical-align: middle" required/>
                            <label class="radio-btn" for="radiobtn">Aiuto medico</label></br></br>

                            <!-- Note sul servizio -->
                            <p for="descr">Descrizione della richiesta:</p></br>
                            <input type="text" class="fieldset" id="descr" placeholder="Aggiungi una descrizione sul servizio richiesto"></br></br>
                            
                        </div>

                        <input type="submit" class="prenota-btn" name="PrenotaButton" value="Prenota">
                    </form>
                </div>
            </div>
            
            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>