// Ejercicio 5.1: Calcular el perímetro de un cuadrado a partir del lado:
function calcularPerimetroCuadrado() {
    var lado = parseFloat(prompt("Ingrese la longitud del lado del cuadrado:"));
    var perimetro = lado * 4;
    alert("El perímetro del cuadrado es: " + perimetro);
}
// Ejercicio 5.2: Realizar cálculos con cuatro números ingresados:
function calcularSumaYProducto() {
    var num1 = parseFloat(prompt("Ingrese el primer número:"));
    var num2 = parseFloat(prompt("Ingrese el segundo número:"));
    var num3 = parseFloat(prompt("Ingrese el tercer número:"));
    var num4 = parseFloat(prompt("Ingrese el cuarto número:"));
    
    var suma = num1 + num2;
    var producto = num3 * num4;
    
    alert("La suma de los dos primeros números es: " + suma);
    alert("El producto del tercer y cuarto número es: " + producto);
}
// Ejercicio 5.3: Calcular la suma y el producto de cuatro valores:
function calcularSumaYProducto() {
    var num1 = parseFloat(prompt("Ingrese el primer número:"));
    var num2 = parseFloat(prompt("Ingrese el segundo número:"));
    var num3 = parseFloat(prompt("Ingrese el tercer número:"));
    var num4 = parseFloat(prompt("Ingrese el cuarto número:"));
    
    var suma = num1 + num2 + num3 + num4;
    var producto = num1 * num2 * num3 * num4;
    
    alert("La suma de los cuatro números es: " + suma);
    alert("El producto de los cuatro números es: " + producto);
}
// Ejercicio 5.4: Calcular el monto que debe abonar el comprador:

function calcularTotalCompra() {
    var precioArticulo = parseInt(prompt("Ingrese el precio del artículo:"));
    var cantidadComprada = parseInt(prompt("Ingrese la cantidad comprada:"));
    
    var total = precioArticulo * cantidadComprada;
    
    alert("El total a abonar es: $" + total);
}
// Ejercicio 6.1: Determinar si un alumno está promocionado:

function verificarPromocion() {
    var nota1 = parseInt(prompt("Ingrese la primera nota:"));
    var nota2 = parseInt(prompt("Ingrese la segunda nota:"));
    var nota3 = parseInt(prompt("Ingrese la tercera nota:"));
    
    var suma = nota1 + nota2 + nota3;
    var promedio = suma / 3;
    
    if (promedio >= 7) {
        alert("Promocionado");
    } else {
        alert("No promocionado");
    }
}
// Ejercicio 6.2: Verificar si dos claves son iguales:

function verificarClavesIguales() {
    var clave1 = prompt("Ingrese la primera clave:");
    var clave2 = prompt("Ingrese la segunda clave:");
    
    if (clave1 === clave2) {
        alert("Las claves son iguales.");
    } else {
        alert("Las claves son diferentes.");
    }
}
// Ejercicio 7.1: Realizar operaciones según el valor de dos números:

function operacionesConNumeros() {
    var num1 = parseFloat(prompt("Ingrese el primer número:"));
    var num2 = parseFloat(prompt("Ingrese el segundo número:"));
    
    if (num1 > num2) {
        var suma = num1 + num2;
        var resta = num1 - num2;
        alert("Suma: " + suma + ", Diferencia: " + resta);
    } else {
        var producto = num1 * num2;
        var division = num1 / num2;
        alert("Producto: " + producto + ", División: " + division);
    }
}
// Ejercicio 7.2: Determinar el estado del alumno basado en el promedio:

function verificarEstadoAlumno() {
    var nota1 = parseFloat(prompt("Ingrese la primera nota:"));
    var nota2 = parseFloat(prompt("Ingrese la segunda nota:"));
    var nota3 = parseFloat(prompt("Ingrese la tercera nota:"));
    
    var suma = nota1 + nota2 + nota3;
    var promedio = suma / 3;
    
    if (promedio >= 4) {
        alert("Regular");
    } else {
        alert("Reprobado");
    }
}
// 7.3: Verificar si un número tiene uno o dos dígitos:

function verificarNumeroDeDigitos() {
    var numero = parseInt(prompt("Ingrese un número positivo de uno o dos dígitos:"));

    if (!isNaN(numero) && numero >= 1 && numero <= 99) {
        if (numero >= 10) {
            alert("El número tiene dos dígitos.");
        } else {
            alert("El número tiene un dígito.");
        }
    } else {
        alert("Número no válido. Ingrese un número entre 1 y 99.");
    }
}


