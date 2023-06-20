<?php
    session_start();
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
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./log.css"/>
    </head>

    <body>
        <div class="container">
            <!--  Header -->
            <?php include("../Homepage/header.php"); ?>

            <!-- Form -->
            <div class="form-class">
                <!-- Bottoni per scegliere tra Login e Registrati -->
                <div class="nav">
                    <ul>
                        <li class="nav-item1">
                            <a class="nav-link1" href="#">Accedi</a>
                        </li>

                        <li class="nav-item2">
                            <a class="nav-link2" href="#">Registrati</a>
                        </li>
                    </ul>
                </div>

                <div class="content">

                    <!-- Login -->
                    <div class="login">
                        <form>
                            <!-- Email input -->
                            <div class="email">
                                <label class="form-label" for="login-mail">E-mail: </label>
                                <input type="email" id="login-mail"/>
                            </div>

                            <!-- Password input -->
                            <div class="password">
                                <label class="form-label" id="login-psw">Password: </label>
                                <input type="password" id="login-psw"/>
                            </div>

                            <div class="row">
                                <div class="left-column">
                                    <!-- Checkbox -->
                                    <div class="checkbox">
                                        <input type="checkbox" value="" id="login-check" checked/>
                                        <label id="login-check">Ricordami</label>
                                    </div>
                                </div>

                                <div class="right-column">
                                    <!-- Forgot password link -->
                                    <a href="#">Password dimenticata?</a>
                                </div>
                            </div>

                            <!-- Login button -->
                            <button type="submit">Accedi</button>
                        </form>
                    </div>

                    <!-- Registrati -->
                    <div class="registra">
                        <form>
                            <!-- Name input -->
                            <div class="name">
                                <label id="register-name">Nome: </label>
                                <input type="text" id="register-name"/>
                            </div>

                            <!-- Username input -->
                            <div class="username">
                                <label id="register-uname">Username: </label>
                                <input type="text" id="register-uname"/>
                            </div>

                            <!-- Email input -->
                            <div class="email">
                                <label id="register-email">E-mail: </label>
                                <input type="email" id="register-email"/>
                            </div>

                            <!-- Password input -->
                            <div class="password">
                                <label id="register-psw">Password: </label>
                                <input type="password" id="register-psw"/>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="password-ripeti">
                                <label id="register-psw-rep">Ripeti la password: </label>
                                <input type="password" id="register-psw-rep"/>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input type="checkbox" value="" id="register-check" checked/>
                                <label id="register-check">Ho letto e accetto i termini di servizio</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit">Registrati</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>