function validateForm() {
    var nome = document.getElementById("nome").value;
    var cognome = document.getElementById("cognome").value;
    var eta = document.getElementById("eta").value;
    var citta = document.getElementById("citta").value;
    
    if(nome.length < 3) {
        alert("Il 'Nome' deve contenere almeno 3 caratteri");
        return false;
    }

    if(cognome.length < 3) {
        alert("Il 'Cognome' deve contenere almeno 3 caratteri");
        return false;
    }

    if(eta < 16){
        alert("Per essere un volontario bisogna avere almeno 16 anni");
        return false;
    }
    
    if(citta.length < 5) {
        alert("Il campo 'Città' deve contenere almeno 5 caratteri");
        return false;
    }

    return true;
}