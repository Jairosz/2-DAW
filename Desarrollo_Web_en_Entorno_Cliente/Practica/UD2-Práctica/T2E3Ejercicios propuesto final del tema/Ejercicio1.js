function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();

    // Definir el radio de la circunferencia
    var radio = 5;

    // Calcular el área de la circunferencia
    var area = Math.PI * Math.pow(radio, 2);

    // Calcular la longitud de la circunferencia
    var longitud = 2 * Math.PI * radio;

    // Mostrar los resultados en el elemento "solucion1"
    solucion.innerHTML = "SOLUCIÓN: Área de la circunferencia: " + area;
    solucion.innerHTML += " Longitud de la circunferencia: " + longitud;
  }