document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("accedi").addEventListener("click", function() {
        var formContainer = document.querySelector(".form");
        formContainer.style.transform = "rotateY(0deg)";
    });

    document.getElementById("registrati").addEventListener("click", function() {
        var formContainer = document.querySelector(".form");
        formContainer.style.transform = "rotateY(180deg)";
    });
});

function validateForm() {

    var nome = document.getElementById("reg-name").value;
    var cognome = document.getElementById("reg-surname").value;
    var email = document.getElementById("reg-email").value;
    var password = document.getElementById("reg-pass").value;

    if(nome.length < 2)
    {
        alert("Il campo 'Nome' deve contenere almeno 2 caratteri");
        return false;
    }

    if(cognome.length < 3)
    {
        alert("Il campo 'Cognome' deve contenere almeno 3 caratteri");
        return false;
    }

    function validateEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+.[^\s@]+$/;
        alert("L'email inserita non è valida");
        return emailPattern.test(email);
    }

    if(password.length < 8)
    {
        alert("Il campo 'password' deve contenere almeno 8 caratteri");
        return false;
    }

    return true;
}