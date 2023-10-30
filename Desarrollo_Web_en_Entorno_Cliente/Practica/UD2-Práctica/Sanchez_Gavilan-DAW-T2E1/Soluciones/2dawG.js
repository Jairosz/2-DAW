// Selecciona el campo de entrada para el número
var numberInput = document.getElementById("number");

// Agrega un oyente de eventos para detectar cambios en el campo de entrada
numberInput.addEventListener("input", function() {

    // Obtiene el valor del número introducido y lo convierte en un número de punto flotante
    var number = parseFloat(numberInput.value);

    // Actualiza el valor del número introducido en el párrafo correspondiente
    document.getElementById("numeroIntroducido").textContent = isNaN(number) ? "" : number;

    // Realiza cálculos en tres contadores diferentes
    var contador5 = 5 + number;
    var contador21 = 21 + number;
    var contador4 = 4 - number;

    // Actualiza los valores de los contadores en los párrafos correspondientes
    document.getElementById("contador5").textContent = contador5 + "            ";
    document.getElementById("contador21").textContent = contador21 + "           ";
    document.getElementById("contador4").textContent = contador4 + "              ";
});