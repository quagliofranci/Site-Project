<?php
    session_start();

    if (!isset($_SESSION['isLoggedIn'])) {
        $_SESSION['isLoggedIn'] = false;
    }

    // Verifica se l'utente è autenticato
    if ($_SESSION['isLoggedIn'] == true) {
        $nome = $_SESSION['name'];
        
        // Controlla se è stato inviato un parametro di logout
        if (isset($_GET['logout'])) {
            // Esegui il logout
            session_unset(); // Rimuovi tutte le variabili di sessione
            session_destroy(); // Termina la sessione
            header('Location: ../Homepage/homepage.php');
        }
    }
?>

<header>
    <a class="logo">Sorrisi d'Argento</a>

    <ul id="menu">
        <li><a href="../Homepage/homepage.php">HOME</a></li>
        <li><a href="../Servizi/servizi.php">SERVIZI</a></li>
        <li><a href="../Chi-Siamo/chi-siamo.php" id="chi-siamo">CHI SIAMO</a></li>
        
        <?php if($_SESSION['isLoggedIn'] == true): ?>
            <li><a href="../Prenota/prenota.php">PRENOTA</a></li>
            
            <li>
                <a href="#" id="menu-dropdown">
                    <?php echo strtoupper($nome) ?>
                    <i class="fa fa-caret-down"></i>
                </a>

                <ul id="menu-drop">
                    <li><a href="#">PRENOTAZIONI</a></li>
                    <li><a href="../Login-Logout/log.php?logout=true">ESCI</a></li>
                 </ul>
            </li>
        <?php else: ?>
            <li><a href="../Login-Logout/log.php">LOGIN</a></li>
        <?php endif; ?>
    </ul>
</header>