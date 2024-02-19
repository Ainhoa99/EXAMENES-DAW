// ===== arreglado =====
'use strict';

const datuakEskatu = 'Agrega un número.';
const galdera = '¿Quieres agregar otro número?';

var conseguirNums = function () {
  let nums = [];
  do {
    nums.push(prompt(datuakEskatu));
  } while (confirm(galdera));

  return nums;
};

var calcularMedia = function (nums) {
  let resultado = 0;
  let cantidadNums = nums.length;
  for (let i = 0; i < nums.length; i++) {
    resultado += parseInt(nums[i]);
  }
  resultado = resultado / cantidadNums;

  return resultado;
};

let nums = conseguirNums();
alert(calcularMedia(nums));
