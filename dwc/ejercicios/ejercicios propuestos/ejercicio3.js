var numerosParesHTML = ''; // Variable para almacenar el HTML de los números pares
var numero = 2; // Inicializar el primer número par

// Bucle while para iterar mientras el número sea menor o igual a 100
while (numero <= 100) {
    // Agregar el número par al HTML
    numerosParesHTML += numero + ' ';

    // Agregar un salto de línea después de cada fila de cinco números
    if (numero % 10 === 0) {
        numerosParesHTML += '<br>';
    }

    // Incrementar el número al siguiente número par
    numero += 2;
}

// Mostrar los números pares en el elemento con ID "numerosPares"
document.getElementById('numerosPares').innerHTML = numerosParesHTML;
        