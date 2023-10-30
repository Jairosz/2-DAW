function calcularCircunferenciaYArea() {
    const radio = parseFloat(document.getElementById("radio").value);

    if (!isNaN(radio)) {
        const circunferencia = 2 * Math.PI * radio;
        const area = Math.PI * Math.pow(radio, 2);

        document.getElementById("resultadoCircunferencia").textContent = circunferencia;
        document.getElementById("resultadoArea").textContent = area;
    } else {
        alert("Por favor, ingresa un valor válido para el radio del círculo.");
    }
}