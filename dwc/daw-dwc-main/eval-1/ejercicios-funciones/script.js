// 1
const celciusToFahrenheit = (c) => (c * 9) / 5 + 32;
document.querySelector('#celciusToFahrenheit').addEventListener('click', () => alert(celciusToFahrenheit(prompt('celcius:'))));

// 2
const tablaMult = (n) => {
  let tabla = '';
  for (let i = 0; i <= 10; i++) {
    tabla += ` ${n} x ${i} = ${n * i}`;
    console.log(tabla);
  }
  return tabla;
};
document.querySelector('#tablaMult').addEventListener('click', () => alert(tablaMult(prompt('base:'))));

// 3
const decimalToBinary = (d) => parseInt(d).toString(2);
document.querySelector('#decimalToBinary').addEventListener('click', () => alert(decimalToBinary(prompt('decimal:'))));

// 4
