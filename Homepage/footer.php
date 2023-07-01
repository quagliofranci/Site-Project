<?php
    include("../aggiorna-cookie.php");
?>

<footer>
    <!-- link per scaricare i font necessari per le icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <h2>Puoi anche trovarci qui</h2>
    
    <ul class="socials">
        <li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook" style="color: white;"></a></li>
        <li><a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram" style="color: white;"></a></li>
        <li><a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube" style="color: white;"></a></li>
        <li><a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin" style="color: white;"></a></li>
    </ul>

    <?php
        if ($contatoreaccessi == 0) {
            print("Non ci risulta che ti sia collegato in precedenza");
        } else {
            if ($contatoreaccessi == 1) {
                print("Hai visitato questo sito in precedenza 1 volta.<br>");
            } else {
                print("Hai visitato questo sito $contatoreaccessi volte.<br>");
            }

            print("Ultimo accesso avvenuto $lasttime");
        }
    ?>
</footer>