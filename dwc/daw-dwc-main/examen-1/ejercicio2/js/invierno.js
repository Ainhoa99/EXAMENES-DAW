'use strict';

// ejecuta el código después de haber cargado los elementos del DOM
document.addEventListener('DOMContentLoaded', () => {
  // expresión regular para nombre y país
  const rgTexto = /^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/;

  // campos de input
  const inputNombre = document.querySelector('#nombre');
  const inputPuntuacion = document.querySelector('#puntuacion');
  const inputPais = document.querySelector('#pais');

  // botones del formulario
  const btnEnviar = document.querySelector('#enviar');
  const btnBorrar = document.querySelector('#borrar');

  // tbody de la tabla creado por el navegador
  const cuerpoTabla = document.querySelector('table tbody');

  btnEnviar.addEventListener('click', (e) => {
    e.preventDefault();

    inputNombre.style.borderColor = 'initial';
    inputPuntuacion.style.borderColor = 'initial';
    inputPais.style.borderColor = 'initial';

    if (validar() === false) return;
    crear();
    borrarFormulario();
  });

  btnBorrar.addEventListener('click', (e) => {
    e.preventDefault();
    borrarUltimo();
  });

  // valida los campos del formulario y hace focus en el incorrecto
  // nombre: usa el regex
  // puntuación: tiene que ser un número entre 0 y 100 incluídos
  // país: usa el regex
  const validar = () => {
    if (validarTexto(inputNombre) === false) return false;
    if (inputPuntuacion.value === '' || inputPuntuacion.value < 0 || inputPuntuacion.value > 100)
      return mostrarError(inputPuntuacion, 'El campo no puede estar vacío y tiene que tener un valor entre 0 y 100 (Incluidos)');
    if (validarTexto(inputPais) === false) return false;

    return true;
  };

  // valida el campo de texto usando el regex pasado por parámetro
  const validarTexto = (campo) => {
    if (!rgTexto.test(campo.value)) return mostrarError(campo, 'El campo no puede estar vacío y solo puede tener letras y espacios');
    return true;
  };

  // cambia el color del borde del campo y hace focus en él
  const mostrarError = (campo, mensaje) => {
    campo.style.borderColor = 'red';
    campo.focus();
    alert(mensaje);

    return false;
  };

  // crea la fila con las celdas necesarias
  const crear = () => {
    const fila = document.createElement('tr');
    fila.addEventListener('mouseover', () => {
      colorear(fila);
    });
    fila.addEventListener('mouseout', () => {
      decolorear(fila);
    });

    const celdaNombre = document.createElement('td');
    celdaNombre.innerText = inputNombre.value;

    const celdaPuntuacion = document.createElement('td');
    celdaPuntuacion.innerText = inputPuntuacion.value;

    const celdaPais = document.createElement('td');
    const imgPais = document.createElement('img');
    imgPais.src = `img/${inputPais.value}.png`;
    celdaPais.append(imgPais);

    fila.append(celdaNombre, celdaPuntuacion, celdaPais);
    cuerpoTabla.append(fila);
  };

  // vacía los campos del formulario
  const borrarFormulario = () => {
    inputNombre.value = '';
    inputPuntuacion.value = '';
    inputPais.value = '';
  };

  // elimina la última fila de la tabla,
  // siempre y cuando no sea la última fila restante (la que tiene los nombres de las columnas)
  const borrarUltimo = () => {
    const filas = [...document.querySelectorAll('table tr')];
    if (filas.length > 1) filas.slice(-1)[0].remove();
  };

  // cambian el color del fondo de la fila pasa como parámetro
  const colorear = (fila) => (fila.style.backgroundColor = 'red');
  const decolorear = (fila) => (fila.style.backgroundColor = 'unset');
});
