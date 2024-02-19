const texto = document.querySelector('#texto');
const campoSalida = document.querySelector('#salida');
const campoDestino = document.querySelector('#destino');
const btnCalcular = document.querySelector('#calcular');

btnCalcular.addEventListener('click', () => handleClick());

const handleClick = () => {
  campoSalida.classList.remove('error');
  campoDestino.classList.remove('error');

  const stringSalida = campoSalida.value;
  const stringDestino = campoDestino.value;

  if (!comprobarCampos(stringSalida, stringDestino)) return;

  const fechaSalida = new Date(stringSalida);
  const fechaDestino = new Date(stringDestino);

  texto.innerText = calcularDiferencia(fechaSalida, fechaDestino);
};

const comprobarCampos = (salida, destino) => {
  let camposCorrectos = true;

  if (salida === '') {
    camposCorrectos = false;
    campoSalida.classList.add('error');
  }

  if (destino === '') {
    camposCorrectos = false;
    campoDestino.classList.add('error');
  }

  return camposCorrectos;
};

const calcularDiferencia = (salida, destino) => {
  let diferenciaSegundos = Math.abs(destino - salida) / 1000;

  const years = Math.floor(diferenciaSegundos / 31536000);
  diferenciaSegundos -= years * 31536000;

  const days = Math.floor(diferenciaSegundos / 86400);
  diferenciaSegundos -= days * 86400;

  const hours = Math.floor(diferenciaSegundos / 3600) % 24;
  diferenciaSegundos -= hours * 3600;

  const minutes = Math.floor(diferenciaSegundos / 60) % 60;
  diferenciaSegundos -= minutes * 60;

  let diferencia = '';

  if (years > 0) diferencia += years === 1 ? `${years} año, ` : `${years} años, `;
  if (days > 0) diferencia += days === 1 ? `${days} día, ` : `${days} días, `;
  if (hours > 0) diferencia += hours === 1 ? `${hours} hora, ` : `${hours} horas, `;
  if (minutes > 0) diferencia += minutes === 1 ? `${minutes} minuto` : `${minutes} minutos`;

  if (diferencia === '') {
    diferencia = `No viajarás en el tiempo.`;
  } else {
    if (diferencia.endsWith(', ')) diferencia = diferencia.substring(0, diferencia.length - 2);
    diferencia = `Viajarás al ${salida < destino ? 'futuro' : 'pasado'} ${diferencia}.`;
  }

  return diferencia;
};
