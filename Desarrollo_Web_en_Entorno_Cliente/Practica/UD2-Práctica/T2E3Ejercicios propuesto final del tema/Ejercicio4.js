function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();
    // Ejemplo 1: Verificar el tipo de una cadena
    var texto = "Hola, soy una cadena";
    solucion.innerHTML += "El tipo de 'texto' es: " + typeof texto + "<br>";

    // Ejemplo 2: Verificar el tipo de un número
    var numero = 42;
    solucion.innerHTML += "El tipo de 'numero' es: " + typeof numero + "<br>";

    // Ejemplo 3: Verificar el tipo de un booleano
    var esVerdadero = true;
    solucion.innerHTML += "El tipo de 'esVerdadero' es: " + typeof esVerdadero + "<br>";

    // Ejemplo 4: Verificar el tipo de un objeto
    var objeto = { nombre: "Ejemplo", edad: 30 };
    solucion.innerHTML += "El tipo de 'objeto' es: " + typeof objeto + "<br>";


    // Ejemplo 5: Verificar el tipo de una variable nula
    var variableNula = null;
    solucion.innerHTML += "El tipo de 'variableNula' es: " + typeof variableNula + "<br>";

    // Ejemplo 6: Verificar el tipo de una variable indefinida
    var variableIndefinida;
    solucion.innerHTML += "El tipo de 'variableIndefinida' es: " + typeof variableIndefinida + "<br>";



}