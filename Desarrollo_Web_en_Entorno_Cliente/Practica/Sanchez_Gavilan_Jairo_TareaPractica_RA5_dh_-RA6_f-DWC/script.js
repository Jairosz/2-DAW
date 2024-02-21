document.addEventListener('DOMContentLoaded', function () {
    var zonadibujo = document.getElementById('zonadibujo');
    
    for (var i = 0; i < 30; i++) {
      for (var j = 0; j < 30; j++) {
        var celda = document.createElement('div');
        celda.className = 'celda';
        zonadibujo.appendChild(celda);
      }
    }
  });