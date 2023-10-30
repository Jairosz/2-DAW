function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();
    var dato1 = "Ronaldo" + 5 + 5;
    var dato2 = 5 + 5 + "Ronaldo";

    solucion.innerHTML = "Variable dato1: " + dato1 + "<br>";
    solucion.innerHTML += "Variable dato2: " + dato2;




}