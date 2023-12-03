const array1 = [
    "Queridos compañeros",
    "Por otra parte,y dados los condicionamientos actuales",
    "Asimismo,",
    "Sin embargo no hemos de olvidar que",
    "De igual manera,",
    "La práctica de la vida cotidiana prueba que,",
    "No es indispensable argumentar el peso y la significación de estos problemas ya que,",
    "Las experiencias ricas y diversas muestran que,",
    "El afán de organización, pero sobre todo",
    "Los superiores principios ideológicos, condicionan que",
    "Incluso, bien pudiéramos atrevernos a sugerir que",
    "Es obvio señalar que,",
    "Pero pecaríamos de insinceros si soslayásemos que,",
    "Y además, quedaríamos inmersos en la más abyecta de las estulticias si no fueramos consacientes de que,",
    "Por último, y como definitivo elemento esclarecedor, cabe añadir que,"
];

const array2 = [
    "la realización de las premisas del programa",
    "la complejidad de los estudios de los dirigentes",
    "el aumento constante, en cantidad y en extensión, de nuestra actividad",
    "la estructura actual de la organización",
    "el nuevo modelo de actividad de la organización,",
    "el desarrollo continuo de distintas formas de actividad",
    "nuestra actividad de información y propaganda",
    "el reforzamiento y desarrollo de las estructuras",
    "la consulta con los numerosos militantes",
    "el inicio de la acción general de formación de las actitudes",
    "un relanzamiento específico de todos los sectores implicados",
    "la superación de experiencias periclitadas",
    "una aplicación indiscriminada de los factores confluyentes",
    "la condición sine qua non rectora del proceso",
    "el proceso consensuado de unas y otras aplicaciones concurrentes"
];

const array3 = [
    "nos obliga a un exhaustivo análisis", // 0
    "cumple un rol escencial en la formación", // 1
    "exige la precisión y la determinación", // 2 
    "ayuda a la preparación y a la realización",
    "garantiza la participación de un grupo importante en la formación", // 3
    "cumple deberes importantes en la determinación", // 4 
    "facilita la creación", // 5 
    "obstaculiza la apreciación de la importancia", // 6
    "ofrece un ensayo interesante de verificación", // 7
    "implica el proceso de reestructuración y modernización", // 8
    "habrá de significar un auténtico y eficaz punto de partida", // 9
    "permite en todo caso explicitar las razones fundamentales", // 10
    "asegura, en todo caso, un proceso muy sensible de inversión", // 11
    "radica en una elaboración cuidadosa y sistemática de las estrategias adecuadas", // 12
    "deriva de una indirecta incidencia superadora" // 13
];

const array4 = [
    "de las condiciones financieras y administrativas existentes.",
    "de las directivas de desarrollo para el futuro.",
    "del sistema de participación general.",
    "de las actitudes de los miembros hacia sus deberes ineludibles.",
    "de las nuevas proposiciones.",
    "de las direcciones educativas en el sentido del progreso.",
    "del sistema de formación de cuadros que corresponda a las necesidades.",
    "de las condiciones de las actividades apropiadas.",
    "del modelo de desarrollo.",
    "de las formas de acción.",
    "de las básicas premisas adoptadas.",
    "de toda una casuística de amplio espectro.",
    "de los elementos generadores.",
    "para configurar una interface amigable y coadyuvante a la reingeniería del sistema.",
    "de toda una serie de criterios ideológicamente sistematizados en un frente común de actuación regeneradora."
];

var fraseGenerada = "";
let textoCompleto = ""; // Variable para almacenar el texto generado

function generarFrase() {
    // Incrementar el contador al hacer clic en el botón
    let contador = obtenerContador() + 1;
    guardarContador(contador);
    let indiceAleatorio = Math.floor(Math.random() * array1.length);

    let nuevaFrase = `${array1[indiceAleatorio]} ${array2[indiceAleatorio]} ${array3[indiceAleatorio]} ${array4[indiceAleatorio]}`;
    array1.splice(indiceAleatorio, 1);
    array2.splice(indiceAleatorio, 1);
    array3.splice(indiceAleatorio, 1);
    array4.splice(indiceAleatorio, 1);

    textoCompleto += `${nuevaFrase}<br>`; // Concatena la nueva frase con el texto existente


    // Seleccionar el elemento <p> por su id y modificar su contenido con la frase generada
    document.getElementById('texto-generado').innerHTML = textoCompleto;
    // Mostrar el contador almacenado en la cookie debajo del botón
    document.getElementById('contador').innerText = `Veces que ha generado: ${contador}`;

}
// Función para obtener el contador de la cookie
function obtenerContador() {
    let contador = parseInt(getCookie('contador')) || 0; // Obtener el contador almacenado en la cookie
    return contador;
}

// Función para guardar el contador en la cookie
function guardarContador(contador) {
    setCookie('contador', contador, 30); // Guardar el contador en la cookie por 30 días
}

// Funciones para manejar cookies
function setCookie(nombre, valor, dias) {
    let fecha = new Date();
    fecha.setTime(fecha.getTime() + (dias * 24 * 60 * 60 * 1000));
    let expiracion = "expires=" + fecha.toUTCString();
    document.cookie = nombre + "=" + valor + ";" + expiracion + ";path=/";
}

function getCookie(nombre) {
    let nombreEQ = nombre + "=";
    let cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(nombreEQ) === 0) {
            return cookie.substring(nombreEQ.length, cookie.length);
        }
    }
    return null;
}