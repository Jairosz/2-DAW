function convertir() {
    const numeroInput = parseInt(document.getElementById("numeroInput").value); // Obtiene el valor del campo de entrada de números (número entero)

    const baseInput = parseInt(document.getElementById("baseInput").value); // Obtiene el valor del campo de entrada de números (base de conversión)

    if (isNaN(numeroInput) || isNaN(baseInput)) { // Verifica si los valores ingresados no son números válidos
        document.getElementById("resultado").textContent = "Por favor, ingresa números válidos.";
    } else if (baseInput < 2 || baseInput > 36) { // Verifica si la base de conversión está fuera del rango permitido (de 2 a 36)
        document.getElementById("resultado").textContent = "La base debe estar entre 2 y 36.";
    } else {
        const resultado = numeroInput.toString(baseInput); // Convierte el número entero a la base de conversión deseada

        document.getElementById("resultado").textContent = resultado; // Muestra el resultado en la página
    }
}