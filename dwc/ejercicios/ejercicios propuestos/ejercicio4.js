var sumatoriosHTML = ''; // Variable para almacenar el HTML de los sumatorios
var suma = 0; // Inicializar la suma

// Bucle for para iterar sobre los números del 1 al 100
for (var i = 1; i <= 100; i++) {
    // Calcular la suma acumulada
    suma += i;

    // Agregar el número al HTML
    sumatoriosHTML += ' ' + suma ;

    // Agregar un salto de línea después de cada fila de diez números
    if (i % 10 === 0) {
        sumatoriosHTML += '<br>';
    }
}

// Mostrar los sumatorios en el elemento con ID "sumatorios"
document.getElementById('sumatorios').innerHTML = sumatoriosHTML;