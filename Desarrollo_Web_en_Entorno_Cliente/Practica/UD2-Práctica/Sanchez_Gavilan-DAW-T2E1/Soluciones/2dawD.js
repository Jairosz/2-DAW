           //Función para realizar los cálculos y mostrar el resultado en un alert
           function calcularDobleTripleCuadruple() {
            var numero = prompt("Por favor, ingresa un número:");
    
            //Convierto el número ingresado a un valor numérico
            numero = parseFloat(numero);
    
            //Verificamos si es un número válido
            if (!isNaN(numero)) {
                //Calculamos el valor doble, triple y cuadruple
                var doble = numero * 2;
                var triple = numero * 3;
                var cuadruple = numero * 4;
    
                //Muestro el resultado
                alert("Has escrito el número: " + numero +
                      "\nDoble: " + doble +
                      "\nTriple: " + triple +
                      "\nCuádruple: " + cuadruple);
             } else {
                //Muestro mensaje de error si no es un número
                alert("Por favor, ingresa un número válido.");
            }
        }
        
        //Llamada a la función para que se ejecute
        calcularDobleTripleCuadruple();