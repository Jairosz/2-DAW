    // Declaración de variables
    var numeros = [];   // Un array para almacenar los números ingresados.
    var numero;         // Variable para almacenar el número ingresado en cada iteración.
    var contador = 0;   // Un contador para llevar la cuenta de números válidos ingresados.
    var suma = 0;       // Variable para mantener la suma de los números válidos ingresados.

    // Inicio de un bucle infinito (se utiliza 'while (true)' para que el bucle se ejecute indefinidamente)
    while (true) {
        // Solicitar al usuario que introduzca un número
        numero = parseInt(prompt("Introduce un número (9999 para finalizar):"));
        
        // Comprobar si el número ingresado es igual a 9999 para finalizar el bucle
        if (numero === 9999) {
            break; // Sale del bucle
        }

        // Verificar si el número ingresado es un número válido
        if (!isNaN(numero)) {
            // Agregar el número al array de 'numeros'
            numeros.push(numero);
            // Incrementar el contador de números válidos
            contador++;
            // Sumar el número al valor acumulado en 'suma'
            suma += numero;
        } else {
            // Mostrar una alerta si el número no es válido
            alert("Por favor, introduce un número válido.");
        }
    }

    // Mostrar una alerta con el número de números válidos ingresados (excluyendo el 9999)
    alert("Número de números introducidos (excluyendo el 9999): " + contador);
    // Mostrar una alerta con la suma de los números válidos ingresados (excluyendo el 9999)
    alert("Suma de los números introducidos (excluyendo el 9999): " + suma);