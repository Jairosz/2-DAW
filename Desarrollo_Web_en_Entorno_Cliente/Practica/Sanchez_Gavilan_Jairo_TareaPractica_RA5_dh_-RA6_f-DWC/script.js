window.onload = function() {
  // Cogemos los elementos del DOM HTML
  var tablaCasillas = document.createElement('table');
  tablaCasillas.className = 'tablerodibujo';

  var zonadibujo = document.getElementById('zonadibujo');

  var colorActivo = ''; // Color activo seleccionado

  var colorear = false;

  // Bucle para generar las celdas en las que colorear
  for (var i = 0; i < 30; i++) {
      var fila = document.createElement('tr');
      for (var j = 0; j < 30; j++) {
          var celda = document.createElement('td');

          // Evento "mouseover" en las celdas para cambiar de color al pasar el ratón
          celda.addEventListener('mouseover', function(e) {
              if (colorear) {
                e.target.style.backgroundColor = colorActivo;
              }
          });

          fila.appendChild(celda);
      }
      tablaCasillas.appendChild(fila);
  }

  // Añadimos la tabla al elemento con id "zonadibujo"
  zonadibujo.appendChild(tablaCasillas);

  // Capturamos los colores de la paleta
  var colores = document.querySelectorAll('#paleta td');

  // Evento "click" en cada color de la paleta
  colores.forEach(function(color) {
      color.addEventListener('click', function(e) {
          // Opción para quitar la selección del color
          colores.forEach(function(c) {
              c.classList.remove('seleccionado');
          });

          // Cuando se hace clic en un color, lo marcamos como activo
          colorActivo = getComputedStyle(e.target).backgroundColor;

          // Le asignamos la clase "seleccionado" para que se pinte con ese color
          e.target.classList.add('seleccionado');
      });
  });

  // Eventos "mousedown" y "mouseup" en la tabla para activar y desactivar el pincel
  tablaCasillas.addEventListener('mousedown', function(e) {
    colorear = !colorear; 
    document.getElementById('pincel').textContent = colorear ? 'PINCEL COLOREANDO (ACTIVADO)' : 'PINCEL DESACTIVADO';
  });
};
