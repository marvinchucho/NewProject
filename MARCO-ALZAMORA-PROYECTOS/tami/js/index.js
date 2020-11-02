let cont = 0;

function cambiarImagen() {
    cont++;
    switch (cont % 4 + 1) {
        case 1:
            document.getElementById("fotocambia").src = "./images/ozono-nobg.png";
            break;
        case 2:
            document.getElementById("fotocambia").src = "./images/esterilizador-nobg.png";
            break;
        case 3:
            document.getElementById("fotocambia").src = "./images/esterilizador2-nobg.png";
            break;
        case 4:
            document.getElementById("fotocambia").src = "./images/mascarilla-nobg.png";
            break;
    }
}

function inicio() {
    setInterval(cambiarImagen, 3000);
}

window.onload = inicio;