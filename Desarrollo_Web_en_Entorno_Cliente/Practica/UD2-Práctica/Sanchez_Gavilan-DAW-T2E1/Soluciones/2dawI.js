function convertir() {
    const octalInput = document.getElementById("octalInput").value; // Obtiene el valor del campo de entrada de texto

    const decimalResult = parseInt(octalInput, 8); // Convierte el valor de octalInput en un número decimal

    const binarioResult = decimalResult.toString(2); // Convierte el número decimal en su representación binaria (base 2)

    document.getElementById("decimalResult").textContent = decimalResult; // Muestra el resultado decimal en la página
    document.getElementById("binarioResult").textContent = binarioResult; // Muestra el resultado binario en la página
}