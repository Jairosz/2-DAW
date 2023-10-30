var farenheit, celsius;
var s = "";
for (var i = -2; i <= 12; i++) {
    celsius = 10 * i;
    farenheit = 32 + (celsius * 9) / 5;
    s = s + "C= " + celsius + " F= " + farenheit + "\n";
    if (celsius === 0) s = s + "Punto de congelación del Agua\n";
    if (celsius === 100) s = s + "Punto de ebullición del Agua\n";
}
alert(s);