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
        <meta name="description" content="Pagina dedicata alla prenotazione dei servizi proposti sul sito 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./prenota.css"/>
        <script src="./prenota.js"></script>
    </head>

    <body>
        <div class="container">
            <?php
                if($_SESSION['isLoggedIn'] == true) {
                    include("../Homepage/header.php");
                }
                else{
                    echo '<script type="text/javascript">';
                    echo 'alert("Per poter accedere a questa pagina devi effettuare prima l\'accesso!");';
                    echo 'window.location.href = "../Login-Logout/log.php";';
                    echo '</script>';
                }
            ?>

            <!-- Form per la prenotazione del servizio -->
            <div class="center">
                <div class="prenota-form">
                    <form id="PrenotaForm" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" onsubmit="return validateForm();">
                        <div class="form-fieldset">
                            <!-- Città -->
                            <input type="text" class="fieldset" id="citta" name="citta" placeholder="La tua città" required></br></br>

                            <!-- Cap -->
                            <input type="number" class="fieldset" id="cap" name="cap" pattern="[0-9]" min='0' placeholder="CAP" required></br></br>
                            
                            <!-- Indirizzo -->
                            <input type="text" class="fieldset" id="address" name="indirizzo" placeholder="Il tuo indirizzo" required></br></br>
                            
                            <!-- Cellulare -->
                            <!-- Il pattern inserito impedisce di inserire numeri che siano diversi dal formato scelto -->
                            <input type="tel" class="fieldset" id="cell" name="cell" pattern="[0-9]{10}" placeholder="Il tuo numero di cellulare" required></br></br></br>
                            
                            <!-- Volontario -->
                            <div class="volontario">
                                <label for="volontario">Scegli un volontario:</label>

                                <select id="volontario" name="volontario">
                                    <option value="Nessuna">Nessuna preferenza</option>
                                    <option value="Emanuele">Emanuele</option>
                                    <option value="Francesco">Francesco</option>
                                    <option value="Matteo">Matteo</option>
                                    <option value="Riccardo">Riccardo</option>
                                </select>
                                
                                <!-- Question mark che reindirizza a "Chi Siamo" per far vedere i volontari -->
                                <a href="../Chi-Siamo/chi-siamo.php" target="_blank"><i class="fa fa-question-circle" style="color: rgb(255, 255, 175)"></i></a>
                            </div>

                            <!-- Data -->
                            <div class="data-prenotazione">
                                <label style="margin-right: 20%;" for="data">Data: </label>
                                <input type="datetime-local" min="" id="data" name="data" required/>
                            </div> 

                            <!-- Servizi -->
                            </br><p>Scegli il servizio di cui vuoi usufruire:</p></br>

                            <input type="radio" class="radio-btn" id="radiobtn" name="servizio" value="Compagnia" style="vertical-align: middle" required/>
                            <label class="radio-btn" for="radiobtn">Compagnia</label>

                            <input type="radio" class="radio-btn" id="radiobtn" name="servizio" value="Commissione" style="vertical-align: middle" required/>
                            <label class="radio-btn" for="radiobtn">Commissione</label>

                            <input type="radio" class="radio-btn" id="radiobtn" name="servizio" value="Aiuto medico" style="vertical-align: middle" required/>
                            <label class="radio-btn" for="radiobtn">Aiuto medico</label></br></br>

                            <!-- Note sul servizio -->
                            <p for="descr">Descrizione della richiesta:</p></br>
                            <input type="text" class="fieldset" id="descr" name="desc" placeholder="Aggiungi una descrizione sul servizio richiesto"></br></br>
                            
                        </div>

                        <input type="submit" class="prenota-btn" name="PrenotaButton" value="Prenota">
                    </form>
                </div>
            </div>

            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if($_SESSION['isLoggedIn'] == true) {
                        if(isset($_POST["PrenotaButton"])) {
                            include("../Login-Logout/logdb.php");
                            
                            $email = $_SESSION["email"];
                            $citta = trim($_POST["citta"]);
                            $cap = trim($_POST["cap"]);
                            $indirizzo = $_POST["indirizzo"];
                            $cell = trim($_POST["cell"]);
                            $volontario = $_POST["volontario"];
                            $data = $_POST["data"];
                            $servizio = $_POST["servizio"];
                            $desc = $_POST["desc"];

                            // Prepared statement per evitare SQL-Injection
                            $query = "INSERT INTO prenota (email, città, cap, indirizzo, cellulare, volontario, servizio, desc_servizio, datas)
                            VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9);";

                            $result = pg_query_params($db, $query, array($email, $citta, $cap, $indirizzo, $cell, $volontario, $servizio, $desc, $data));
                            
                            if($result) {
                                echo '<script type="text/javascript">';
                                echo 'alert("Prenotazione avvenuta con successo!");';
                                echo '</script>';
                                pg_close($db);
                            } else {
                                echo '<script type="text/javascript">';
                                echo 'alert("Prenotazione all\'orario indicato già presente!");';
                                echo '</script>';
                                pg_close($db);
                            }
                        }
                    } else {
                        echo '<script type="text/javascript">';
                        echo 'alert("Per poterti prenotare devi prima accedere");';
                        echo 'window.location.href = "../Login-Logout/log.php";';
                        echo '</script>';
                    }
                }
            ?>
            
            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>