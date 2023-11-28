// Definir la clase Usuario
class Usuario {
    constructor(nombre, nombre_usuario, contraseña) {
      this.nombre = nombre;
      this.nombre_usuario = nombre_usuario;
      this.contraseña = contraseña;
    }
  }
  
  // Crear una instancia de Usuario (esto podría venir de una base de datos o servidor)
  const usuarioRegistrado = new Usuario("Nombre Completo", "usuario", "contraseña");
  
  function authenticate() {
    // Obtener valores del formulario
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Lógica de autenticación
    if (username === usuarioRegistrado.nombre_usuario && password === usuarioRegistrado.contraseña) {
      alert("Inicio de sesión exitoso");
      // Aquí podrías redirigir al usuario a otra página o realizar otras acciones necesarias
    } else {
      alert("Error de autenticación. Verifica tu usuario y contraseña.");
    }
  }
  