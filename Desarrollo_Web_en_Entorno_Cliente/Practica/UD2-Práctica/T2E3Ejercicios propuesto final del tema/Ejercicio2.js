function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();

    var edad = 25;

    var mensaje = (edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
    solucion.innerHTML = mensaje;
  }