function mostrarEnunciado1() {
    const enunciado = document.getElementById("ej1");
    const solucion = document.getElementById("solucion1");
    const btn = document.getElementById("btn");

    enunciado.classList.remove("esconder");
    solucion.classList.remove("esconder");
    btn.remove();
    var milista = ['panadero', 456, [0, 1, 2]];
        var listaElement = document.getElementById("lista");

        // Recorre el array y agrega cada elemento a una lista en la página
        milista.forEach(function (elemento) {
            var listItem = document.createElement("li");
            listItem.textContent = elemento;
            listaElement.appendChild(listItem);
        });

  }