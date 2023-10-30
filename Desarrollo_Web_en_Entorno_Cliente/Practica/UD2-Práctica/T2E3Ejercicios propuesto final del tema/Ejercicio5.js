function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();
    // Variable global
    var mensaje = "Hola, soy una variable global";

    function mostrarMensaje() {
        // Accede a la variable global y la sobreescribe
        mensaje = "Este es el mensaje modificado";
    }

    // Muestra el mensaje original
    alert(mensaje);

    // Llama a la función que sobreescribe la variable global
    mostrarMensaje();

    // Muestra la variable global modificada
    alert(mensaje);


}