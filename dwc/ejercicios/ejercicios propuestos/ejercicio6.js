var numerosParesHTML = ''; // Variable para almacenar el HTML de los números pares
var inicioIntervalo = 1; // Inicializar el inicio del intervalo

do {
    var finIntervalo = inicioIntervalo + 24; // Calcular el final del intervalo

    // Generar números pares dentro del intervalo
    for (var i = inicioIntervalo; i <= finIntervalo; i++) {
        if (i % 2 === 0) {
            numerosParesHTML += i + ' ';
        }
    }

    // Preguntar al usuario si desea continuar mostrando más números
    if (confirm('¿Deseas mostrar el siguiente intervalo de números pares de ' + (inicioIntervalo + 25) + ' a ' + (finIntervalo + 25) + '?')) {
        inicioIntervalo += 25; // Incrementar el inicio del siguiente intervalo
    } else {
        break; // Salir del bucle si el usuario no desea continuar
    }
} while (true);

// Mostrar los números pares en el elemento con ID "numerosPares"
document.getElementById('numerosPares').innerHTML = numerosParesHTML;
        