const texto = document.querySelector('#texto');
const btnReset = document.querySelector('#reset');
const btnNums = [...document.querySelector('#caja-botones').children];

let respuestaCorrecta;

document.addEventListener('click', (e) => {
  if (e.target.matches('button')) {
    handleClick(e.target.id);
  }
});

let limiteIntentos;

const habilitarBotones = (estado) => btnNums.forEach((btn) => (btn.disabled = !estado));

const reset = () => {
  respuestaCorrecta = Math.floor(Math.random() * (6 - 1 + 1)) + 1;
  texto.innerText = 'Adivina el número';
  btnReset.disabled = true;
  habilitarBotones(true);
  limiteIntentos = 3;
};

const handleClick = (id) => {
  if (id === 'reset') return reset();
  adivinar(parseInt(id.substring(3)));
};

const adivinar = (num) => {
  limiteIntentos--;

  if (num === respuestaCorrecta) {
    texto.innerText = `Respuesta correcta`;
    btnReset.disabled = false;
    habilitarBotones(false);
  } else if (limiteIntentos === 0 && num !== respuestaCorrecta) {
    texto.innerText = 'Has perdido';
    btnReset.disabled = false;
    habilitarBotones(false);
  } else {
    texto.innerText = `Respuesta incorrecta, intentos restantes: ${limiteIntentos}`;
    btnNums[num - 1].disabled = true;
  }
};

reset();
