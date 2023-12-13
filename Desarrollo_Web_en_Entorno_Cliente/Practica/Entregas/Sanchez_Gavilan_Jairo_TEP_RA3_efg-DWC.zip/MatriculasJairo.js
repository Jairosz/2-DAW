
// Función para establecer una cookie con un nombre, valor y tiempo de expiración
function setCookie(nombre, valor, diasExpiracion) {
    var fecha = new Date();
    fecha.setTime(fecha.getTime() + (diasExpiracion * 24 * 60 * 60 * 1000)); // Tiempo en milisegundos
    var expira = "expires=" + fecha.toUTCString();
    document.cookie = nombre + "=" + valor + ";" + expira + ";path=/";
}
var matriculas = [];

// La función introducirMatricula() solicita matrículas al usuario y las clasifica
function introducirMatricula() {
    do {
        //ingresar y clasificar matrículas
        var matriculaIntroducida = prompt("Ingrese aquí su matrícula, solo números. Escriba 'salir' para acabar");

        if (matriculaIntroducida === "salir") {
            alert("Has salido, gracias.");
            break; // Salir del bucle si se ingresa "salir"
        }

        if (isNaN(matriculaIntroducida) || matriculaIntroducida.length !== 4) {
            // Verifica si la matrícula no es un número o no tiene una longitud de 4 caracteres

            alert("Introduzca una matrícula válida de 4 números");
        } else {
            // Divide la matrícula en cuatro dígitos

            var digito1 = matriculaIntroducida.charAt(0);
            var digito2 = matriculaIntroducida.charAt(1);
            var digito3 = matriculaIntroducida.charAt(2);
            var digito4 = matriculaIntroducida.charAt(3);
            // Comprueba diferentes criterios para clasificar la matrícula en categorías específicas

            if ((digito1 === digito2 && digito3 === digito4) ||
                (digito1 === digito3 && digito2 === digito4) ||
                (digito1 === digito4 && digito2 === digito3)) {
                // Doble Pareja: Dos pares de dígitos iguales

                alert("La matrícula introducida es una doble pareja");
                matriculas.push(matriculaIntroducida);


            } else if ((digito1 === digito2 && digito2 === digito3) ||
                // Trío: Tres dígitos iguales consecutivos

                (digito2 === digito3 && digito3 === digito4)) {
                alert("La matrícula introducida es un trío");
                matriculas.push(matriculaIntroducida);


            } else if ((digito1 === (parseInt(digito2) - 1).toString() &&
                // Escalera Cuádruple: Secuencia ascendente o específica (como "1090")

                digito2 === (parseInt(digito3) - 1).toString() &&
                digito3 === (parseInt(digito4) - 1).toString()) ||
                (digito1 === '1' && digito2 === '0' && digito3 === '9' && digito4 === '0')) {
                alert("La matrícula introducida es una escalera cuádruple");
                matriculas.push(matriculaIntroducida);


            } else if (digito1 === digito2 && digito2 === digito3 && digito3 === digito4) {
                // Poker: Cuatro dígitos iguales
                alert("La matrícula introducida es un poker (cuatro iguales)");
                matriculas.push(matriculaIntroducida);


            } else {
                // Si la matrícula no se clasifica en ninguna categoría definida
                alert("La matrícula introducida no corresponde a ninguna figura definida");
                matriculas.push(matriculaIntroducida);

            }
        }
    } while (true);
    // Se vuelve a llamar setCookie al finalizar el bucle, almacenando la última versión de 'matriculas'
    setCookie("Matriculas", matriculas, 30);
}
// Función para mostrar estadísticas en una nueva pestaña
function mostrarEstadísticas() {
    const nuevaPestana = window.open("MatriculasSecundariaJairo.html");              

    setTimeout(function () {
        nuevaPestana.close(); // Cierra la nueva pestaña después de 10 segundos
    }, 10000);
}
