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

function getTodayDate() {
    date = new Date();
    day = date.getDate();
    month = date.getMonth() + 1; // Poiché parte da Gennaio=0, quindi +1 --> Gennaio=1
    year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    today = year + "-" + month + "-" + day;	
    
    return today;
}

function validateForm() {
    var nome = document.getElementById("name").value;
    var cognome = document.getElementById("surname").value;
    var birth = document.getElementById('date').value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;

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

    if(birth > getTodayDate()) {
        alert("La data di nascita non può essere successiva ad oggi");
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