function validateForm() {
    var nome = document.getElementById("nome").value;
    var cognome = document.getElementById("cognome").value;
    var eta = document.getElementById("eta").value;
    var citta = document.getElementById("citta").value;
    var lunedi = document.getElementById("lunedi");
    var martedi = document.getElementById("martedi");
    var mercoledi = document.getElementById("mercoledi");
    var giovedi = document.getElementById("giovedi");
    var venerdi = document.getElementById("venerdi");
    var sabato = document.getElementById("sabato");
    var domenica = document.getElementById("domenica");
    
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

    if(!lunedi.checked && !martedi.checked && !mercoledi.checked && !giovedi.checked && !venerdi.checked && !sabato.checked && !domenica.checked) {
        alert("Selezionare almeno un giorno tra i disponibili");
        return false;
    }

    return true;
}