function cambiarColor(){
    var botonTrue = document.getElementById('respuestaVerdadero');
    var botonFalse = document.getElementById('respuestaFalso');

    if (botonTrue.classList.contains('colorBotonDefault')) {
        botonTrue.classList.remove('colorBotonDefault');
        botonTrue.classList.add('colorBotonGreen');
    } 
    if (botonFalse.classList.contains('colorBotonDefault')) {
        botonFalse.classList.remove('colorBotonDefault');
        botonFalse.classList.add('colorBotonRed');
    }
}