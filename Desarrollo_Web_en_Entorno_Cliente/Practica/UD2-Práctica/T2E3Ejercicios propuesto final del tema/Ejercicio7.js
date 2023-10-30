function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();

    alert(Number("9 9"));  // Resultado: NaN (No es un número)
    alert(Number("dos"));  // Resultado: NaN (No es un número)

    solucion.innerHTML = ("el resultado es NaN");

}