function validateForm() {

    var city = document.getElementById("city").value;
    var cap = document.getElementById("cap").value;
    var indirizzo = document.getElementById("address").value;
    
    if(city.length < 2)
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

    return true;
}