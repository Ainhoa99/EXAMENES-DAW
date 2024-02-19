const str = 'España se ha proclamado campeona del Eurobasket después de derrotar a Francia (88-76) en la gran final de Berlín';

// 1
alert(`1 - longitud: ${str.length}`);

// 2
alert(`2 - carácter en 25: ${str.charAt(25)}`);

// 3
alert(`3 - primera posición de "d": ${str.indexOf('d')}`);
alert(`3 - última posición de "d": ${str.lastIndexOf('d')}`);
alert(`3 - segunda posición de "d": ${str.indexOf('d', str.indexOf('d') + 1)}`);

// 4
alert(`4 - primera posición de "Eurobasket": ${str.indexOf('Eurobasket')}`);

// 5
alert(`5 - contiene "Portugal": ${str.includes('Portugal')}`);

// 6
alert(`6 - empieza por "Berlín": ${str.startsWith('Berlín')}`);
alert(`6 - acaba por "Berlín": ${str.endsWith('Berlín')}`);

// 7
const str7 = str.concat(' el día 18 de septiembre de 2022');
alert(`7 - agregar "el día 18 de septiembre de 2022":\n${str7}`);

// 8
alert(`8 - letras entre 26 y 35: ${str.slice(26, 35)}`);

// 9
alert(`9 - letras a partir de 40: ${str.substring(40)}`);

// 10
let str10 = ' '.repeat(5).concat(str).concat(' '.repeat(10));
alert(`10 - agregar espacios: ${str10}`);
alert(`10 - eliminar espacios: ${str10.trim()}`);

// 11
alert(`11 - mayúsculas: ${str.toUpperCase()}`);
alert(`11 - minúsculas: ${str.toLowerCase()}`);

// 12
let arr12 = str.split(' ');
alert(`12 - separar por palabras: [${arr12}]`);

// 13
alert(`13 - posiciones 0, 6 y 11 del array anterior: ${arr12[0]} ${arr12[6]} ${arr12[11]}`);
