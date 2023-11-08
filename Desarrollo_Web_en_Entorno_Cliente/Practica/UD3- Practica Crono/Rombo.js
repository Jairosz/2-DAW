const tamano = 4; 


const mensajeContainer = document.getElementById("mensaje");
function generarRombo(n) {
  if (n % 2 === 0) {
    mensajeContainer.textContent = "El número debe ser impar para generar un rombo.";
    return;
  } else {
    mensajeContainer.textContent = " "; 
  }

  const romboContainer = document.getElementById("rombo-container");
  romboContainer.innerHTML = "";

  for (let i = 1; i <= n; i += 2) {
    const espacios = (n - i) / 2;
    const asteriscos = i;
    const espacioStr = " ".repeat(espacios);
    const asteriscoStr = "*".repeat(asteriscos);
    const linea = espacioStr + asteriscoStr;
    romboContainer.innerHTML += `<div>${linea}</div>`;
  }

  for (let i = n - 2; i >= 1; i -= 2) {
    const espacios = (n - i) / 2;
    const asteriscos = i;
    const espacioStr = " ".repeat(espacios);
    const asteriscoStr = "*".repeat(asteriscos);
    const linea = espacioStr + asteriscoStr;
    romboContainer.innerHTML += `<div>${linea}</div>`;
  }
}
generarRombo(tamano);
