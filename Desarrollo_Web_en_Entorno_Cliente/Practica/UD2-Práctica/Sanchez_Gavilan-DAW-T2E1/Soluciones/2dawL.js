function calcularProducto() {
    // Solicitar al usuario que introduzca el primer número positivo menor de 57
    var numero1 = parseInt(prompt("Introduce el primer número positivo menor de 57:"));

    // Solicitar al usuario que introduzca el segundo número positivo menor de 57
    var numero2 = parseInt(prompt("Introduce el segundo número positivo menor de 57:"));

    // Verificar si alguno de los valores ingresados no es un número válido o no cumple con las condiciones
    if (isNaN(numero1) || isNaN(numero2) || numero1 <= 0 || numero2 <= 0 || numero1 >= 57 || numero2 >= 57) {
        // Mostrar un mensaje de alerta en caso de que las condiciones no se cumplan
        alert("Por favor, introduce dos números positivos menores de 57.");
    } else {
        // Calcular el producto de los dos números
        var producto = numero1 * numero2;

        // Mostrar un mensaje de alerta con el resultado del producto
        alert("El producto de " + numero1 + " y " + numero2 + " es: " + producto);
    }

    // Preguntar al usuario si desea volver a empezar
    var reiniciar = confirm("¿Quieres volver a empezar?");
    if (reiniciar) {
        // Llamar a la función calcularProducto nuevamente si el usuario desea reiniciar
        calcularProducto();
    }
}

// Llamar a la función calcularProducto inicialmente para comenzar el proceso
calcularProducto();