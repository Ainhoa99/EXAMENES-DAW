// Augusto de la Cámara

// Preguntas y respuestas
const preguntas = {
  geo: '¿Cuál es la capital de Italia?',
  arte: '¿Cuál es el apellido del pintor de El Grito?',
  entretenimiento: '¿Cómo se llama el villano de El Señor de los Anillos?',
  historia: '¿En qué año cayó el muro de Berlín?',
  ciencia: '¿Cuál es el símbolo químico del potasio?',
  deportes: '¿Qué país ganó el mundial de fútbol de 2010?',
};

const respuestas = {
  geo: 'Roma',
  arte: 'Munch',
  entretenimiento: 'Sauron',
  historia: '1989',
  ciencia: 'K',
  deportes: 'España',
};

// Elementos HTML
const textoPregunta = document.querySelector('#pregunta');
const textoRespuesta = document.querySelector('#respuesta');
const botonesCategorias = [...document.querySelector('#caja-botones').children];
const botonResponder = document.querySelector('#responder');

// Variables
let categoriaActual = '';
let puntos = 0;
let rondas = 0;
let fallos = 0;

// Listeners
document.addEventListener('click', (event) => {
  if (event.target.matches('button')) handleClick(event.target.id);
});

textoRespuesta.addEventListener('keyup', (event) => {
  event.preventDefault();

  if (event.key === 'Enter') {
    botonResponder.click();
  }
});

// Funciones
const comprobarRespuesta = () => {
  const respuesta = textoRespuesta.value;
  const botonCategoriaActual = document.querySelector(`#${categoriaActual}`);
  botonCategoriaActual.disabled = true;

  rondas++;
  if (respuesta.toLowerCase() === respuestas[categoriaActual].toLowerCase()) {
    puntos++;
    botonCategoriaActual.classList.add('correcto');
    textoPregunta.innerText = 'Correcto';
  } else {
    fallos++;
    botonCategoriaActual.classList.add('incorrecto');
    textoPregunta.innerText = `Incorrecto, la respuesta correcta era ${respuestas[categoriaActual]}`;
  }

  textoRespuesta.value = '';

  if (puntos >= 4 || fallos >= 3 || rondas == 6) return finalizar();
  habilitarBotones(true);
};

const habilitarBotones = (habilitar) => {
  botonesCategorias.forEach((btn) => {
    if (!btn.classList.contains('incorrecto') && !btn.classList.contains('correcto')) btn.disabled = !habilitar;
  });

  botonResponder.disabled = habilitar;
  textoRespuesta.disabled = habilitar;
};

const finalizar = () => {
  botonesCategorias.forEach((btn) => {
    btn.disabled = true;
  });

  botonResponder.disabled = true;
  textoRespuesta.disabled = true;
  textoPregunta.innerText = puntos >= 4 ? 'Felicidades, has ganado' : `${textoPregunta.innerText}\nHas perdido, has conseguido menos de 4 puntos`;
};

const handleClick = (idBtn) => {
  if (idBtn === 'responder') return comprobarRespuesta(idBtn);
  categoriaActual = idBtn;
  textoPregunta.innerText = preguntas[idBtn];
  habilitarBotones(false);
  textoRespuesta.focus();
};
