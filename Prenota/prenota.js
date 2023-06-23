function validateForm() {

    var nome = document.getElementById("name").value;
    var cognome = document.getElementById("surname").value;
    var indirizzo = document.getElementById("address").value;
    
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

    if(indirizzo.length < 5) {
        alert("L' 'Indirizzo' inserito non è valido");
        return false;
    }

    return true;
}