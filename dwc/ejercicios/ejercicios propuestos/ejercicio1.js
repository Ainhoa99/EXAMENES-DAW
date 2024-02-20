// Solicitar el nombre
var nombre = prompt("Por favor, introduce tu nombre:");

// Solicitar el primer apellido
var primerApellido = prompt("Por favor, introduce tu primer apellido:");

// Solicitar el segundo apellido
var segundoApellido = prompt("Por favor, introduce tu segundo apellido:");

// Construir la cadena con los datos ingresados
var datosCompletos = "Nombre: " + nombre + "<br>" +
                     "Primer Apellido: " + primerApellido + "<br>" +
                     "Segundo Apellido: " + segundoApellido;

// Mostrar los datos en la página HTML
document.getElementById("nombre").innerHTML = "Nombre: " + nombre;
document.getElementById("ape1").innerHTML = "Primer apellido: " + primerApellido;
document.getElementById("ape2").innerHTML = "Segundo apellido: " + segundoApellido;
document.getElementById("nombreCompleto").innerHTML = "Nombre Completo: " + nombre + " " + primerApellido + " " + segundoApellido; // Cambio en la concatenación y texto
