function convertirNumero() {
    const numeroEntero = parseInt(document.getElementById("numero").value);  // Obtiene el valor del input y lo convierte a un número entero

    if (!isNaN(numeroEntero)) {  // Verifica si el valor es un número válido (no es NaN)
        // Conversión a base 16 (hexadecimal)
        const numeroHexadecimal = numeroEntero.toString(16);  // Convierte el número entero a su representación en base 16 (hexadecimal)

        // Conversión a base 5 (quinary)
        const numeroQuinary = numeroEntero.toString(5);  // Convierte el número entero a su representación en base 5 (quinary)

        // Mostrar resultados
        document.getElementById("resultadoHexadecimal").textContent = numeroHexadecimal;  // Muestra el resultado hexadecimal en la página
        document.getElementById("resultadoQuinary").textContent = numeroQuinary;  // Muestra el resultado quinary en la página
    } else {
        alert("Por favor, ingresa un número entero válido.");  // Muestra una alerta si el valor no es un número válido
    }
}