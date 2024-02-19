const inputYear = document.querySelector('#year');
const elementosLista = [...document.querySelector('#categorias').children];
const currentYear = new Date().getFullYear();

document.querySelector('#calcular').addEventListener('click', () => handleClick());

const handleClick = () => {
  inputYear.classList.remove('error');

  elementosLista.forEach((elemento) => elemento.classList.remove('resultado'));

  const year = inputYear.value;

  if (!comprobarCampo(year)) return;

  mostrarResultado(currentYear - parseInt(year));
};

const comprobarCampo = (year) => {
  const campoCorrecto = true;

  if (isNaN(year) || year === '' || year >= currentYear) {
    inputYear.classList.add('error');
    campoCorrecto = false;
  }

  return campoCorrecto;
};

const mostrarResultado = (edad) => {
  console.log(edad);
  if (edad < 9) {
    agregarClaseRes(document.querySelector('#pre-benjamin'));
  } else if (edad < 11) {
    agregarClaseRes(document.querySelector('#benjamin'));
  } else if (edad < 13) {
    agregarClaseRes(document.querySelector('#alevin'));
  } else if (edad < 15) {
    agregarClaseRes(document.querySelector('#infantil'));
  } else if (edad < 17) {
    agregarClaseRes(document.querySelector('#cadete'));
  } else if (edad < 20) {
    agregarClaseRes(document.querySelector('#juvenil'));
  } else {
    agregarClaseRes(document.querySelector('#senior'));
  }
};

const agregarClaseRes = (elem) => elem.classList.add('resultado');
