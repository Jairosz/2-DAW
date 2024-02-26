document.addEventListener("DOMContentLoaded", function() {
    // Esperar a que el DOM esté completamente cargado

    // Obtener referencia a los campos de texto y el formulario
    var nombreInput = document.getElementById("nombre");
    var apellidosInput = document.getElementById("apellidos");
    var edadInput = document.getElementById("edad");
    var nifInput = document.getElementById("nif");
    var emailInput = document.getElementById("email");
    var provinciaSelect = document.getElementById("provincia");
    var fechaInput = document.getElementById("fecha");
    var telefonoInput = document.getElementById("telefono");
    var horaInput = document.getElementById("hora");
    var formulario = document.getElementById("formulario");
    var erroresDiv = document.getElementById("errores");

    // Agregar un evento de escucha al formulario para la validación
    formulario.addEventListener("submit", function(event) {
        // Reiniciar los estilos y mensajes de error
        nombreInput.classList.remove("error");
        apellidosInput.classList.remove("error");
        edadInput.classList.remove("error");
        nifInput.classList.remove("error");
        emailInput.classList.remove("error");
        provinciaSelect.classList.remove("error");
        fechaInput.classList.remove("error");
        telefonoInput.classList.remove("error");
        horaInput.classList.remove("error");
        erroresDiv.innerHTML = "";
        var errores = [];

        if (nombreInput.value.trim() === "") {
            errores.push("El campo Nombre no puede estar vacío.");
            nombreInput.classList.add("error");
            nombreInput.focus();
        }
     
        if (apellidosInput.value.trim() === "") {
            errores.push("El campo Apellidos no puede estar vacío.");
            apellidosInput.classList.add("error");
            if (errores.length === 1) {
                apellidosInput.focus();
            }
        }
    
        var edadValue = parseInt(edadInput.value, 10);
        if (isNaN(edadValue) || edadValue < 0 || edadValue > 105) {
            errores.push("La Edad debe ser un número entre 0 y 105.");
            edadInput.classList.add("error");
            if (errores.length === 1) {
                edadInput.focus();
            }
        }

        var nifPattern = /^[0-9]{8}-[a-zA-Z]$/;
        if (!nifPattern.test(nifInput.value.trim())) {
            errores.push("El NIF debe tener 8 números, un guión y una letra.");
            nifInput.classList.add("error");
            if (errores.length === 1) {
                nifInput.focus();
            }
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value.trim())) {
            errores.push("Formato de E-mail incorrecto.");
            emailInput.classList.add("error");
            if (errores.length === 1) {
                emailInput.focus();
            }
        }

        var fechaPattern = /^(\d{2}\/\d{2}\/\d{4})|(\d{2}-\d{2}-\d{4})$/;
        if (!fechaPattern.test(fechaInput.value.trim())) {
            errores.push("Formato de fecha incorrecto. Use dd/mm/aaaa o dd-mm-aaaa.");
            fechaInput.classList.add("error");
            if (errores.length === 1) {
                fechaInput.focus();
            }
        }

        var telefonoPattern = /^\d{9}$/;
        if (!telefonoPattern.test(telefonoInput.value.trim())) {
            errores.push("El Teléfono debe tener 9 dígitos.");
            telefonoInput.classList.add("error");
            if (errores.length === 1) {
                telefonoInput.focus();
            }
        }

        var horaPattern = /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/;
        if (!horaPattern.test(horaInput.value.trim())) {
            errores.push("Formato de hora incorrecto. Use hh:mm.");
            horaInput.classList.add("error");
            if (errores.length === 1) {
                horaInput.focus();
            }
        }

        if (errores.length > 0) {
            erroresDiv.innerHTML = errores.join("<br>");
            event.preventDefault(); 
        }

        var confirmacionEnvio = window.confirm("¿Está seguro de enviar el formulario?");
        
        if (!confirmacionEnvio) {
            event.preventDefault();
        }
    });
});