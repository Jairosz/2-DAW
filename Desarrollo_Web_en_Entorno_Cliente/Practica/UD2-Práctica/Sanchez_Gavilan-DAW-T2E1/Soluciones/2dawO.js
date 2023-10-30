var numeros = [];
var numero;
var contador = 0;
var suma = 0;
var producto = 1;

while (true) {
    numero = parseInt(prompt("Introduce un número (9999 para finalizar):"));
    
    if (numero === 9999) {
        break;
    }

    if (!isNaN(numero)) {
        numeros.push(numero);
        contador++;
        suma += numero;
        producto *= numero;
    } else {
        alert("Por favor, introduce un número válido.");
    }
}

alert("Número de números introducidos (excluyendo el 9999): " + contador);
alert("Suma de los números introducidos (excluyendo el 9999): " + suma);
alert("Producto de los números introducidos (excluyendo el 9999): " + producto);