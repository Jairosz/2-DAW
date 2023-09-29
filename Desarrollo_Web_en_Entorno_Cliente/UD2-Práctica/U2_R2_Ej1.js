let intentos = 3;

function obtenerNota() {
  while (intentos > 0) {
    const nota = parseFloat(prompt(`Ingresa una nota entre 0 y 10 (${intentos} intentos restantes):`));

    if (!isNaN(nota) && nota >= 0 && nota <= 10) {
      alert(`¡Has ingresado una nota válida: ${nota}`);
      break;
    } else {
      alert('Nota inválida. Por favor, ingresa una nota entre 0 y 10.');
      intentos--;
    }
  }

  if (intentos === 0) {
    alert('Has agotado tus intentos. El programa ha terminado.');
  }
}

obtenerNota();
