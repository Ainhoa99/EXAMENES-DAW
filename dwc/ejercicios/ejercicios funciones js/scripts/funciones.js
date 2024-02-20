function mostrarValores(num1, num2) {
    var inicio = Math.min(num1, num2);
    var fin = Math.max(num1, num2);
    var valores = '';

    for (var i = inicio; i <= fin; i++) {
        valores += i + ' ';
    }

    return valores;
}

function mainEjercicio1() {
    var continuar = true;

    while (continuar) {
        var num1 = parseInt(prompt("Ingrese el primer número:"));
        var num2 = parseInt(prompt("Ingrese el segundo número:"));

        var valores = mostrarValores(num1, num2);

        document.write("Los valores entre " + num1 + " y " + num2 + " son: " + valores + "<br>");

        var respuesta = prompt("¿Desea continuar? (si/no)").toLowerCase();
        if (respuesta !== "si") {
            continuar = false;
        }
    }
}

function ordenarNumeros(num1, num2, num3) {
    var numeros = [num1, num2, num3];
    numeros.sort(function(a, b) {
        return a - b;
    });
    return numeros;
}

function mainEjercicio2() {
    var num1 = parseInt(prompt("Ingrese el primer número:"));
    var num2 = parseInt(prompt("Ingrese el segundo número:"));
    var num3 = parseInt(prompt("Ingrese el tercer número:"));

    var numerosOrdenados = ordenarNumeros(num1, num2, num3);

    document.write("Los números ordenados de menor a mayor son: " + numerosOrdenados.join(', ') + "<br>");
}
