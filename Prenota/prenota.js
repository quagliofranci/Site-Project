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
    var city = document.getElementById("city").value;
    var cap = document.getElementById("cap").value;
    var indirizzo = document.getElementById("address").value;
    var data = document.getElementById("data").value;
    
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

    if(data < getTodayDate()) {
        alert("La data di nascita non può essere antecedente ad oggi");
        return false;
    }

    return true;
}