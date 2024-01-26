// script.js

window.onload = function () {
    var nombreElemento = document.getElementById("nombre");
    var apellidosElemento = document.getElementById("apellidos");
    var edadElemento = document.getElementById("edad");
    var nifElemento = document.getElementById("nif");
    var emailElemento = document.getElementById("email");
    var provinciaElemento = document.getElementById("provincia");
    var fechaElemento = document.getElementById("fecha");
    var telefonoElemento = document.getElementById("telefono");
    var horaElemento = document.getElementById("hora");
    var formularioElemento = document.getElementById("formulario");
    var erroresContainer = document.getElementById("errores");

    if (nombreElemento && apellidosElemento && edadElemento && nifElemento &&
        emailElemento && provinciaElemento && fechaElemento && telefonoElemento &&
        horaElemento && formularioElemento && erroresContainer) {

        // Función para convertir a mayúsculas cuando se pierde el foco en NOMBRE y APELLIDOS
        function convertirAMayusculas(elemento) {
            elemento.value = elemento.value.toUpperCase();
        }

        // Función para validar NOMBRE y APELLIDOS
        function validarNombreYApellidos() {
            if (nombreElemento.value.trim() === "" || apellidosElemento.value.trim() === "") {
                erroresContainer.innerHTML = "Los campos NOMBRE y APELLIDOS son obligatorios.";
                if (nombreElemento.value.trim() === "") {
                    nombreElemento.focus();
                } else {
                    apellidosElemento.focus();
                }
                return false;
            }
            return true;
        }

        // Función para validar la EDAD
        function validarEdad() {
            var edad = edadElemento.value.trim();
            if (isNaN(edad) || edad < 0 || edad > 105) {
                erroresContainer.innerHTML = "La EDAD debe contener solo valores numéricos y estar en el rango de 0 a 105.";
                edadElemento.focus();
                return false;
            }
            return true;
        }

        // Función para validar el NIF
        function validarNIF() {
            // Expresión regular: 8 números, un guion y una letra (no se valida la letra)
            var regexNIF = /^\d{8}-[a-zA-Z]$/;

            if (!regexNIF.test(nifElemento.value.trim())) {
                erroresContainer.innerHTML = "El formato del NIF no es válido. Debe ser 8 números, un guion y una letra.";
                nifElemento.focus();
                return false;
            }
            return true;
        }

        // Función para validar el E-MAIL
        function validarEmail() {
            // Expresión regular para validar un formato de email básico
            var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!regexEmail.test(emailElemento.value.trim())) {
                erroresContainer.innerHTML = "El formato del E-MAIL no es válido.";
                emailElemento.focus();
                return false;
            }
            return true;
        }

        // Función para validar la PROVINCIA
        function validarProvincia() {
            if (provinciaElemento.value === "0") {
                erroresContainer.innerHTML = "Seleccione una provincia de Andalucía.";
                provinciaElemento.focus();
                return false;
            }
            return true;
        }

        // Función para validar la FECHA
        function validarFecha() {
            // Expresión regular: dd/mm/aaaa o dd-mm-aaaa
            var regexFecha = /^(0[1-9]|[12][0-9]|3[01])[-\/](0[1-9]|1[0-2])[-\/]\d{4}$/;

            if (!regexFecha.test(fechaElemento.value.trim())) {
                erroresContainer.innerHTML = "El formato de la FECHA no es válido. Use dd/mm/aaaa o dd-mm-aaaa.";
                fechaElemento.focus();
                return false;
            }
            return true;
        }

        // Asignar la función convertirAMayusculas al evento blur de NOMBRE y APELLIDOS
        nombreElemento.addEventListener('blur', function () {
            convertirAMayusculas(this);
        });

        apellidosElemento.addEventListener('blur', function () {
            convertirAMayusculas(this);
        });

        // Asignar la función validarEdad al evento blur de EDAD
        edadElemento.addEventListener('blur', function () {
            validarEdad();
        });

        // Asignar la función validarNIF al evento blur de NIF
        nifElemento.addEventListener('blur', function () {
            validarNIF();
        });

        // Asignar la función validarEmail al evento blur de E-MAIL
        emailElemento.addEventListener('blur', function () {
            validarEmail();
        });

        // Asignar la función validarProvincia al evento blur de PROVINCIA
        provinciaElemento.addEventListener('blur', function () {
            validarProvincia();
        });

        // Asignar la función validarFecha al evento blur de FECHA
        fechaElemento.addEventListener('blur', function () {
            validarFecha();
        });

        // Asignar la función confirmarEnvio al evento submit del formulario
        formularioElemento.addEventListener('submit', function (event) {
            if (!validarNombreYApellidos() || !validarEdad() || !validarNIF() || !validarEmail() || !validarProvincia() || !validarFecha() || !confirmarEnvio()) {
                event.preventDefault(); // Cancelar el envío del formulario si la validación o confirmación fallan
            }
        });
        // Asignar la función validarTelefono al evento blur de TELEFONO
        telefonoElemento.addEventListener('blur', function () {
            validarTelefono();
        });

        // Función para validar el TELEFONO
        function validarTelefono() {
            // Expresión regular: exactamente 9 dígitos
            var regexTelefono = /^\d{9}$/;

            if (!regexTelefono.test(telefonoElemento.value.trim())) {
                erroresContainer.innerHTML = "El formato del TELÉFONO no es válido. Debe contener exactamente 9 dígitos.";
                telefonoElemento.focus();
                return false;
            }
            return true;
        }
        // Función para validar la HORA
        function validarHora() {
            // Expresión regular: patrón hh:mm
            var regexHora = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;

            if (!regexHora.test(horaElemento.value.trim())) {
                erroresContainer.innerHTML = "El formato de la HORA no es válido. Debe seguir el patrón hh:mm.";
                horaElemento.focus();
                return false;
            }
            return true;
        }

        // Asignar la función validarHora al evento blur de HORA
        horaElemento.addEventListener('blur', function () {
            validarHora();
        });
        // Función para confirmar el envío del formulario
        function confirmarEnvio() {
            // Se utiliza la función nativa `confirm` para mostrar un cuadro de diálogo de confirmación
            var confirmacion = confirm("¿Estás seguro de enviar el formulario?");

            // Si el usuario confirma, se devuelve true; de lo contrario, se devuelve false
            return confirmacion;
        }

        // Asignar la función confirmarEnvio al evento submit del formulario
        formularioElemento.addEventListener('submit', function (event) {
            // Validar todos los campos antes de confirmar el envío
            if (validarNombreYApellidos() && validarEdad() && validarNIF() &&
                validarEmail() && validarProvincia() && validarFecha() &&
                validarTelefono() && validarHora() && confirmarEnvio()) {
                // Si todo está correcto y el usuario confirma, se permitirá el envío del formulario
                return true;
            } else {
                // Si hay errores o el usuario cancela, se cancelará el envío del formulario
                event.preventDefault();
                return false;
            }
        });


    }

};
