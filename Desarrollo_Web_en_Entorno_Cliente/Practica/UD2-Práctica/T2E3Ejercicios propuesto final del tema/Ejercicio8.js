function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();

    // Supongamos que tienes una fecha en formato "YYYY-MM-DD"
    var fechaString = "2023-10-30";

    // Crear un objeto Date a partir de la cadena de fecha
    var fecha = new Date(fechaString);

    // Obtener el mes (0-11, donde 0 es enero y 11 es diciembre)
    var mes = fecha.getMonth() + 1; // Sumamos 1 porque los meses se indexan desde 0

    // Obtener el año
    var año = fecha.getFullYear();

    // Mostrar el mes y el año
    solucion.innerHTML = "Mes: " + mes + "<br>";
    solucion.innerHTML += "Año: " + año;
}