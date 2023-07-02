<?php
    include("../aggiorna-cookie.php");
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento - Auth</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Pagina di autenticazione relativa al sito 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./log.css"/>
        <script src="./log.js"></script>
    </head>

    <body>
        <div class="container">
            <!--  Header -->
            <?php include("../Homepage/header.php"); ?>

            <!-- Form -->
            <div class="row">
				<div class="column">
                    <!-- pulsanti per switchare tra i form -->
					<h6>
                        <button class="login-btn" id="accedi">Accedi</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="reg-btn" id="registrati">Registrati</button>
                    </h6>
					
					<div class="form">
						<div class="form-divider">
                            <!-- corpo del form di login -->
							<div class="login-form">
								<div class="form-wrapper">
                                    <form id="AccediForm" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                                        <div class="form-fieldset">
                                            <input type="email" class="fieldset-style" name="email" placeholder="La tua email" required></br></br>
                                            <input type="password" class="fieldset-style" name="pass" placeholder="La tua password" required></br></br></br>
                                        </div>

									    <input type="submit" class="login-button" name="AccediButton" value="Accedi"></br></br>
                                    </form>
                                </div>
			      			</div>

                            <!-- corpo del form di registrazione -->
							<div class="register-form">
								<div class="form-wrapper">

                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" id="RegisterForm" onsubmit="return validateForm();">
                                        <div class="form-fieldset">
                                            <input type="text" class="fieldset-style" id="name" placeholder="Il tuo nome" name="name" required></br></br>
                                            <input type="text" class="fieldset-style" id="surname" placeholder="Il tuo cognome" name="surname" required></br></br>
                                            
                                            <p style="font-size: bolder; font-weight: 500; margin-bottom: 15px;">Data di nascita</p>
                                            <input type="date" class="fieldset-style" id="date" name="date" min="" required></br></br>

                                            
                                            <input type="radio" class="radio-btn" id="radiobtn" name="sex" value="M" style="vertical-align: middle"/>
                                            <label class="radio-btn" for="radiobtn">M</label>

                                            <input type="radio" class="radio-btn" id="radiobtn" name="sex" value="F" style="vertical-align: middle"/>
                                            <label class="radio-btn" for="radiobtn">F</label>

                                            <input type="radio" class="radio-btn" id="radiobtn" name="sex" value="Altro" style="vertical-align: middle"/>
                                            <label class="radio-btn" for="radiobtn">Altro</label></br></br>
                                            

                                            <input type="email" class="fieldset-style" id="email" name="email" placeholder="La tua email" required></br></br>
                                            <input type="password" class="fieldset-style" id="pass" name="pass" placeholder="La tua password" required></br></br>
                                        </div>

									    <input type="submit" class="register-button" name="RegistratiButton" value="Registrati">
                                    </form>
				      			</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>

            <?php 

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(isset($_POST["RegistratiButton"])) {
                        include("logdb.php");

                        $name = trim($_POST["name"]);
                        $surname = trim($_POST["surname"]);
                        $birthdate = $_POST["date"];
                        $sesso = $_POST["sex"];
                        $email = trim($_POST["email"]);
                        $pass = trim($_POST["pass"]);
                        $hash = password_hash($pass, PASSWORD_DEFAULT);

                        // Prepared statement per evitare SQL-Injection
                        $query = "INSERT INTO Utente (nome, cognome, nascita, sesso, email, pass)
                        VALUES ($1, $2, $3, $4, $5, $6);";

                        $result = pg_query_params($db, $query, array($name, $surname, $birthdate, $sesso, $email, $hash));
                        
                        if($result) {

                            echo '<script type="text/javascript">';
                            echo 'alert("Registrazione avvenuta con successo!");';
                            echo '</script>';
                            pg_close($db);

                        } else {
                            echo '<script type="text/javascript">';
                            echo 'alert("Utente è gia registrato! Si prega di effettuare il login");';
                            echo '</script>';
                            pg_close($db);
                        }
                    }
                    else if (isset($_POST["AccediButton"])) {
                        include("logdb.php");

                        $email = trim($_POST["email"]);
                        $pass = trim($_POST["pass"]);
                    
                        $query = "SELECT nome, email, pass FROM Utente WHERE email='$email';";
                    
                        $result2 = pg_query($db, $query);
                    
                        $row = pg_fetch_row($result2);
                    
                        $hash = $row[2];
                    
                        if(!password_verify($pass, $hash)) {
                            echo '<script type="text/javascript">';
                            echo 'alert("L\'email o la password inserite non sono corrette, si prega di riprovare");';
                            echo '</script>';
                            pg_close($db);
                        } else {
                            $_SESSION['name'] = $row[0];
                            $_SESSION['isLoggedIn'] = true;
                            $_SESSION['email'] = $row[1];
                            pg_close($db);
                            // Script per ricaricare la pagina col nuovo header post login
                            echo '<script type="text/javascript">';
                            echo 'window.location.href = "../Homepage/homepage.php";';
                            echo '</script>';
                            exit;
                        }
                    }
                }

            ?>

            <!-- Footer -->
            <?php include("../Homepage/footer.php"); ?>
        </div>
    
    </body>
</html>