function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();

    

}
  function mousePasoEncima() {
    document.getElementById("resultado").innerHTML = "¡El ratón pasó por encima!";
}
function mouseSalio() {
    document.getElementById("resultado").innerHTML = "¡El ratón salió!";
}
function inputPerdioFoco() {
    document.getElementById("resultado").innerHTML = "El campo de entrada perdió el foco.";
}