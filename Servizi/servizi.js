let slideIndex = 1;
showSlides(slideIndex);

// controllo per slide successiva/precedente
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// controllo per visualizzare l'immagine scelta
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// funzione che permette di scorrere tra le foto
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active";
}