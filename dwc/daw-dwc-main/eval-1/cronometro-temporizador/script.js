// ===== general =====
const padNum = (n) => String(n < 0 ? 0 : n).padStart(2, '0');

// ===== cronómetro =====
const cronBtnIniciar = document.querySelector('.cron__iniciar');
const cronBtnPausar = document.querySelector('.cron__pausar');
const cronBtnReset = document.querySelector('.cron__reset');

cronBtnIniciar.addEventListener('click', () => iniciarCron());
cronBtnPausar.addEventListener('click', () => pausarCron());
cronBtnReset.addEventListener('click', () => resetCron());

const cronSpanHoras = document.querySelector('.cron__h');
const cronSpanMins = document.querySelector('.cron__m');
const cronSpanSegundos = document.querySelector('.cron__s');

let cronHoras = 0;
let cronMins = 0;
let cronSegundos = 0;

let cron;

const iniciarCron = () => {
  cronBtnIniciar.disabled = true;
  cronBtnPausar.disabled = false;
  cronBtnReset.disabled = false;

  cron = setInterval(() => {
    cronSpanSegundos.innerText = padNum(++cronSegundos);

    if (cronSegundos === 60) {
      cronSegundos = 0;
      cronSpanSegundos.innerText = padNum(cronSegundos);

      cronSpanMins.innerText = padNum(++cronMins);
      if (cronMins === 60) {
        cronMins = 0;
        cronSpanMins.innerText = padNum(cronMins);

        cronSpanHoras.innerText = padNum(++cronHoras);
      }
    }
  }, 1000);
};

const pausarCron = () => {
  cronBtnIniciar.disabled = false;
  cronBtnPausar.disabled = true;

  clearInterval(cron);
  cron = null;
};

const resetCron = () => {
  clearInterval(cron);
  cron = null;

  cronSpanSegundos.innerText = '00';
  cronSpanMins.innerText = '00';
  cronSpanHoras.innerText = '00';

  cronHoras = 0;
  cronMins = 0;
  cronSegundos = 0;

  cronBtnIniciar.disabled = false;
  cronBtnPausar.disabled = true;
  cronBtnReset.disabled = true;
};

// ===== temporizador =====
document.addEventListener('input', (e) => {
  if (!e.target.matches('input')) return;

  const input = e.target;
  if (input.value.length > 2) {
    if (input.value.charAt(0) === '0') {
      input.value = input.value.slice(1, 3);
    } else {
      input.value = input.value.slice(0, 2);
    }
  } else if (input.value.length === 1) {
    input.value = padNum(input.value);
  } else if (input.value.length === 0) {
    input.value = '00';
  }

  if (!input.classList.contains('temp__h') && input.value > 59) input.value = '59';
});

const tempBtnIniciar = document.querySelector('.temp__iniciar');
const tempBtnPausar = document.querySelector('.temp__pausar');
const tempBtnReset = document.querySelector('.temp__reset');

tempBtnIniciar.addEventListener('click', () => iniciarTemp());
tempBtnPausar.addEventListener('click', () => pausarTemp());
tempBtnReset.addEventListener('click', () => resetTemp());

const tempInputHoras = document.querySelector('.temp__h');
const tempInputMins = document.querySelector('.temp__m');
const tempInputSegundos = document.querySelector('.temp__s');

let tempHoras = 0;
let tempMins = 0;
let tempSegundos = 0;

let temp;

const iniciarTemp = () => {
  tempBtnIniciar.disabled = true;
  tempBtnPausar.disabled = false;
  tempBtnReset.disabled = false;

  tempHoras = parseInt(tempInputHoras.value);
  tempMins = parseInt(tempInputMins.value);
  tempSegundos = parseInt(tempInputSegundos.value);

  temp = setInterval(() => {
    if (tempHoras <= 0 && tempMins <= 0 && tempSegundos <= 0) return resetTemp();

    tempInputSegundos.value = padNum(--tempSegundos);

    if (tempSegundos <= 00) {
      tempSegundos = tempMins === 0 ? 0 : 59;
      tempInputSegundos.value = padNum(tempSegundos);

      tempInputMins.value = padNum(--tempMins);
      if (tempHoras !== 0 && tempMins <= 00) {
        tempMins = tempHoras === 0 ? 0 : 59;
        tempInputMins.value = padNum(tempMins);

        tempInputHoras.value = padNum(--tempHoras);
      }
    }
  }, 1000);
};

const pausarTemp = () => {
  tempBtnIniciar.disabled = false;
  tempBtnPausar.disabled = true;

  clearInterval(temp);
  temp = null;
};

const resetTemp = () => {
  clearInterval(temp);
  temp = null;

  tempInputSegundos.value = '00';
  tempInputMins.value = '00';
  tempInputHoras.value = '00';

  tempHoras = 0;
  tempMins = 0;
  tempSegundos = 0;

  tempBtnIniciar.disabled = false;
  tempBtnPausar.disabled = true;
  tempBtnReset.disabled = true;
};
