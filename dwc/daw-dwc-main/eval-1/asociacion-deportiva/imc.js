const inputAltura = document.querySelector('#altura');
const inputPeso = document.querySelector('#peso');
const filasTabla = [...document.querySelectorAll('tr')];

document.querySelector('#calcular').addEventListener('click', () => handleClick());

const handleClick = () => {
  inputAltura.classList.remove('error');
  inputPeso.classList.remove('error');

  filasTabla.forEach((fila) => fila.classList.remove('resultado'));

  const altura = inputAltura.value;
  const peso = inputPeso.value;

  if (!comprobarCampos(altura, peso)) return;

  mostrarResultado(calcularIMC(parseInt(altura), parseFloat(peso)));
};

const comprobarCampos = (altura, peso) => {
  let camposCorrectos = true;

  if (isNaN(altura) || altura === '' || altura < 1) {
    camposCorrectos = false;
    inputAltura.classList.add('error');
  }

  if (isNaN(peso) || peso === '' || peso < 1) {
    camposCorrectos = false;
    inputPeso.classList.add('error');
  }

  return camposCorrectos;
};

const calcularIMC = (alturaCM, peso) => {
  const alturaM = alturaCM / 100;
  return Math.round((peso / (alturaM * alturaM)) * 10) / 10;
};

const mostrarResultado = (imc) => {
  if (imc < 16) {
    agregarClaseRes(document.querySelector('#del-severa'));
  } else if (imc < 17) {
    agregarClaseRes(document.querySelector('#del-moderada'));
  } else if (imc < 18.5) {
    agregarClaseRes(document.querySelector('#del-aceptable'));
  } else if (imc < 25) {
    agregarClaseRes(document.querySelector('#normal'));
  } else if (imc < 30) {
    agregarClaseRes(document.querySelector('#sobrepeso'));
  } else if (imc < 35) {
    agregarClaseRes(document.querySelector('#obeso-i'));
  } else if (imc < 40) {
    agregarClaseRes(document.querySelector('#obeso-ii'));
  } else {
    agregarClaseRes(document.querySelector('#obeso-iii'));
  }
};

const agregarClaseRes = (fila) => fila.classList.add('resultado');
