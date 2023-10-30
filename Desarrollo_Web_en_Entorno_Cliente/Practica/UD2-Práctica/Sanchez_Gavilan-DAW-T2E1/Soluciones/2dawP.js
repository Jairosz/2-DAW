var suma = 0;
var resultados = [];

for (var i = 23; i < 1000; i += 23) {
    resultados.push(i);
    suma += i;
}

document.write("<strong>Múltiplos de 23 inferiores a 1000:</strong> " + resultados.join(", ") + "<br>");
document.write("<strong>Suma de los múltiplos de 23:</strong> " + suma);