function validateForm() {
    var citta = document.getElementById("citta").value;
    var cap = document.getElementById("cap").value;
    var indirizzo = document.getElementById("address").value;
    var data = document.getElementById("data").value;
    
    if(citta.length < 2)
    {
        alert("Il campo 'città' deve contenere almeno 2 caratteri");
        return false;
    }

    if(cap.length < 5)
    {
        alert("Il campo 'Cap' deve contenere 5 numeri");
        return false;
    }

    if(indirizzo.length < 5) {
        alert("L' 'Indirizzo' inserito non è valido");
        return false;
    }

    var selectedDateTime = new Date(data);
    var currentDateTime = new Date();

    if(selectedDateTime < currentDateTime) {
        alert("La data di prenotazione non può essere antecedente ad oggi");
        return false;
    }

    return true;
}