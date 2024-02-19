// ===== original =====
// falta indentar todo el código
// cambiar nombre de las funciones y variables para que describa mejor lo que son

// falta comillas alrededor de use strict
use strict;

const datuakEskatu = "Gehitu zenbaki bat.";
const galdera = "Beste zenbaki bat sartu nahi duzu?";

// faltan paréntesis después de function
var conseguirNums = function {
// datuak tiene que ser declarado fuera del do while para poder devolverlo
do{
let datuak = [];
datuak.push(prompt(datuakEskatu));
} while (confirm(galdera))
return nums;
}

var calcularMedia = function (array) {
// falta ; al final de las líneas
// falta dar valores iniciales a emaitza y kopurua
let emaitza
let kopurua
// falta declarar i; array.length es un atributo, no un método
for(i=0;i<array.length();i++){
// la asignación de adición es al revés, +=
// falta convertir el valor de array[i] a un number para poder realizar la suma
emaitza =+ array[i];
kopurua ++;
}
emaitza = emaitza / kopurua;
return emaitza;
}

// falta agregar paréntesis para llamar a la función
let datuak = conseguirNums;
alert(calcularMedia(nums));