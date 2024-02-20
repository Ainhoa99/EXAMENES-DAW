var numerosParesHTML = ''; // Variable para almacenar el HTML de los números pares

            // Bucle for para iterar sobre los números del 1 al 100
            for (var i = 2; i <= 100; i += 2) {
                // Agregar el número par al HTML
                numerosParesHTML += i + ' ';

                // Agregar un salto de línea después de cada fila de cinco números
                if (i % 10 === 0) {
                    numerosParesHTML += '<br>';
                }
            }

            // Mostrar los números pares en el elemento con ID "numerosPares"
            document.getElementById('numerosPares').innerHTML = numerosParesHTML;