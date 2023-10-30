// Ejercicio A y B
function ejercicioAB() {
    // Ejercicio A: Restar dos números ingresados por el usuario
    var num1;
    var num2;
    var resultado;

    num1 = prompt("Introduzca el primer número");
    num2 = prompt("Introduzca el segundo número");

    resultado = num1 - num2;

    alert("El resultado es: " + resultado);
}

    // Ejercicio B: Dividir dos números ingresados por el usuario
    function dividirNumeros() {
        var num1 = parseFloat(document.getElementById("numero1").value);
        var num2 = parseFloat(document.getElementById("numero2").value);

        if (!isNaN(num1) && !isNaN(num2)) {
            if (num2 !== 0) {
                var resultado = num1 / num2;
                document.getElementById("resultado").textContent = "El resultado es: " + resultado;
            } else {
                document.getElementById("resultado").textContent = "No se puede dividir por 0, introduce otro número.";
            }
        } else {
            document.getElementById("resultado").textContent = "Introduce otro número válido.";
        }
    }



// Ejercicio C
function ejercicioC() {
    // Solicitar el nombre y la edad al usuario
    var nombre = prompt("Introduzca tu nombre:");
    var edad = prompt("Introduzca tu edad:");
    edad = parseInt(edad);

    if (!isNaN(edad)) {
        // Calcular los días vividos basados en la edad
        var diasVividos = edad * 365;

        // Mostrar el resultado
        alert("Hola, " + nombre + "! Has vivido aproximadamente " + diasVividos + " días hasta ahora.");
    } else {
        alert("Introduce una edad válida.");
    }
}

// Ejercicio D
function ejercicioD() {
    // Solicitar un número al usuario
    var numero = prompt("Introduzca un número:");

    // Convertir el valor ingresado a un número flotante
    numero = parseFloat(numero);

    if (!isNaN(numero)) {
        // Calcular el doble, triple y cuádruple del número
        var doble = numero * 2;
        var triple = numero * 3;
        var cuádruple = numero * 4;

        // Mostrar el resultado
        alert("Has escrito el número: " + numero +
              "\nDoble: " + doble +
              "\nTriple: " + triple +
              "\nCuádruple: " + cuádruple);
    } else {
        alert("Por favor, ingresa un número válido.");
    }
}

// Ejercicio E
function ejercicioE() {
    // Solicitar la base y la altura al usuario
    var base, altura;
    base = prompt("Introduzca la base:");
    altura = prompt("Introduzca la altura:");

    // Convertir los valores ingresados a números flotantes
    base = parseFloat(base);
    altura = parseFloat(altura);

    // Calcular el área del triángulo
    if (!isNaN(base) && !isNaN(altura)) {
        var area = (base * altura) / 2;
        alert("Área = " + area);
    } else {
        alert("El número no es válido.");
    }
}

// Ejercicio F
function ejercicioF() {
    // Solicitar el radio al usuario
    var radio = prompt("Introduzca el radio:");
    radio = parseFloat(radio);

    if (!isNaN(radio) && radio > 0) {
        // Calcular la circunferencia y el área del círculo
        var longitudCircunferencia = 2 * Math.PI * radio;
        var areaCirculo = Math.PI * Math.pow(radio, 2);

        // Mostrar los resultados
        alert("Radio del círculo: " + radio.toFixed(2) +
              "\nCircunferencia: " + longitudCircunferencia.toFixed(2) +
              "\nÁrea: " + areaCirculo.toFixed(2));
    } else {
        alert("Número no válido (debe ser mayor que 0).");
    }
}

// Ejercicio G
function ejercicioG() {
    // Solicitar un número al usuario
    var numero = parseInt(prompt("Escribe un número, por favor:"));

    // Calcular varios contadores
    var contador5 = numero + 5;
    var contador21 = contador5 + 21;
    var contador4 = contador21 - 4;

    // Mostrar los resultados
    document.write("<h1>Tu número: " + numero + "</h1>");
    document.write("<h2>Contadores: " + contador5 + " " + contador21 + " " + contador4 + "</h2>");
}

// Ejercicio H
function ejercicioH() {
    // Solicitar un número entero al usuario
    var numeroEntero = parseInt(prompt("Escribe un número entero:"));

    if (!isNaN(numeroEntero)) {
        // Convertir el número entero a su representación en base 16 (hexadecimal) y en base 5 (quinary)
        var numeroHexadecimal = numeroEntero.toString(16);
        var numeroQuinary = numeroEntero.toString(5);

        // Mostrar los resultados
        document.write("<h2>Número en base 16 (hexadecimal): " + numeroHexadecimal + "</h2>");
        document.write("<h2>Número en base 5 (quinary): " + numeroQuinary + "</h2>");
    } else {
        alert("Por favor, ingresa un número entero válido.");
    }
}

// Ejercicio I
function ejercicioI() {
    // Solicitar un número en base octal al usuario
    var numeroOctal = prompt("Escribe un número en base octal:");
    var numeroDecimal = parseInt(numeroOctal, 8);

    if (!isNaN(numeroDecimal)) {
        // Convertir el número decimal a su representación en base binaria
        var numeroBinario = numeroDecimal.toString(2);

        // Mostrar los resultados
        document.write("<h1>Tu número en Octal es: " + numeroOctal + "</h1>");
        document.write("<h2>Número en decimal: " + numeroDecimal + "</h2>");
        document.write("<h2>Número en binario: " + numeroBinario + "</h2>");
    } else    {
        alert("Por favor, ingresa un número en base octal válido.");
    }
}

// Ejercicio J
function ejercicioJ() {
    // Solicitar un número y una base al usuario
    var numero = parseInt(prompt("Escribe un número entero:"));
    var base = parseInt(prompt("Escribe la base a la que deseas convertir el número:"));

    if (!isNaN(numero) && !isNaN(base) && base >= 2 && base <= 36) {
        // Función para convertir el número a la base deseada
        function convertirBase(numero, base) {
            return numero.toString(base);
        }

        // Realizar la conversión y mostrar el resultado
        var resultado = convertirBase(numero, base);
        document.write("<h2>Resultado: " + resultado + "</h2>");
    } else {
        alert("Por favor, ingresa números válidos y asegúrate de que la base esté entre 2 y 36.");
    }
}

// Ejercicio K
function ejercicioK() {
    // Declaración de variables
    var celsius, fahrenheit;
    var resultado = ""; // Variable para almacenar los resultados y mensajes.

    // Bucle para calcular las temperaturas en grados Celsius y Fahrenheit
    for (var i = -2; i <= 12; i++) {
        celsius = 10 * i;
        fahrenheit = 32 + (celsius * 9) / 5;
        
        // Agregamos los resultados y mensajes al resultado
        resultado += "C= " + celsius + " F= " + fahrenheit + "\n";

        if (celsius === 0) {
            resultado += "Punto de congelación del Agua\n";
        }
        if (celsius === 100) {
            resultado += "Punto de ebullición del Agua\n";
        }
    }

    // Mostramos los resultados y mensajes en una alerta
    alert(resultado);
}

// Ejercicio L
function ejercicioL() {
    // Declaración de variables
    var numero;      // Variable para almacenar el número ingresado en cada iteración.
    var contador = 0;  // Variable para llevar la cuenta de números válidos ingresados.

    // Inicio de un bucle infinito (se utiliza 'while (true)' para que el bucle se ejecute indefinidamente)
    while (true) {
        numero = parseInt(prompt("Introduce un número (9999 para finalizar):"));
        
        // Comprobar si el número ingresado es igual a 9999 para finalizar el bucle
        if (numero === 9999) {
            break;  // Sale del bucle
        }

        // Incrementar el contador de números válidos
        contador++;
    }

    // Mostrar una alerta con el número de números válidos ingresados (excluyendo el 9999)
    alert("Número de números introducidos (excluyendo el 9999): " + contador);
}


// Ejercicio M
function ejercicioM() {
    // Declaración de variables
    var numeros = [];   // Un array para almacenar los números ingresados.
    var numero;         // Variable para almacenar el número ingresado en cada iteración.
    var contador = 0;   // Un contador para llevar la cuenta de números válidos ingresados.

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
        } else {
            // Mostrar una alerta si el número no es válido
            alert("Por favor, introduce un número válido.");
        }
    }

    // Mostrar una alerta con el número de números válidos ingresados (excluyendo el 9999)
    alert("Número de números introducidos (excluyendo el 9999): " + contador);
}


// Ejercicio N
function ejercicioN() {
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
}


// Ejercicio O
function ejercicioO() {
    // Declaración de variables
    var numeros = [];       // Un array para almacenar los números ingresados.
    var numero;             // Variable para almacenar el número ingresado en cada iteración.
    var contador = 0;       // Un contador para llevar la cuenta de números válidos ingresados.
    var suma = 0;           // Variable para mantener la suma de los números válidos ingresados.
    var producto = 1;       // Variable para mantener el producto de los números válidos ingresados.

    // Inicio de un bucle infinito (se utiliza 'while (true)' para que el bucle se ejecute indefinidamente)
    while (true) {
        // Solicitar al usuario que introduzca un número
        numero = parseInt(prompt("Introduce un número (9999 para finalizar):"));
        
        // Comprobar si el número ingresado es igual a 9999 para finalizar el bucle
        if (numero === 9999) {
            break; // Salir del bucle
        }

        // Verificar si el número ingresado es un número válido
        if (!isNaN(numero)) {
            // Agregar el número al array 'numeros'
            numeros.push(numero);
            // Incrementar el contador de números válidos
            contador++;
            // Sumar el número al valor acumulado en 'suma'
            suma += numero;
            // Multiplicar el número al valor acumulado en 'producto'
            producto *= numero;
        } else {
            // Mostrar una alerta si el número no es válido
            alert("Por favor, introduce un número válido.");
        }
    }

    // Mostrar una alerta con el número de números válidos ingresados (excluyendo el 9999)
    alert("Número de números introducidos (excluyendo el 9999): " + contador);

    // Mostrar una alerta con la suma de los números válidos ingresados (excluyendo el 9999)
    alert("Suma de los números introducidos (excluyendo el 9999): " + suma);

    // Mostrar una alerta con el producto de los números válidos ingresados (excluyendo el 9999)
    alert("Producto de los números introducidos (excluyendo el 9999): " + producto);
}


// Ejercicio P
function ejercicioP() {
    var suma = 0;           // Variable para almacenar la suma de los múltiplos de 23
    var resultados = [];    // Array para almacenar los múltiplos de 23 encontrados

    // Recorremos números del 1 al 999
    for (var i = 1; i < 1000; i++) {
        // Comprobamos si el número es múltiplo de 23
        if (i % 23 === 0) {
            // Agregamos el múltiplo encontrado al array de resultados
            resultados.push(i);
            // Sumamos el múltiplo al valor acumulado en 'suma'
            suma += i;
        }
    }

    // Mostramos los múltiplos de 23 encontrados en la página
    document.write("<strong>Múltiplos de 23 inferiores a 1000:</strong> " + resultados.join(", ") + "<br>");
    // Mostramos la suma total de los múltiplos de 23
    document.write("<strong>Suma de los múltiplos de 23:</strong> " + suma);
}
