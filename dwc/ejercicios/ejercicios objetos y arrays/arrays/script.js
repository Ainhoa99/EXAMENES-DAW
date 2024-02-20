var paises = [];

function mostrarMenu() {
    var opcion = prompt(
        "Seleccione una opción:\n" +
        "1. Mostrar número de países.\n" +
        "2. Mostrar listado de países.\n" +
        "3. Mostrar un intervalo de países.\n" +
        "4. Añadir un país.\n" +
        "5. Borrar un país.\n" +
        "6. Consultar un país."
    );
    ejecutarOpcion(opcion);
}

// Función para ejecutar la opción seleccionada por el usuario
function ejecutarOpcion(opcion) {
    switch (opcion) {
        case "1":
            alert(mostrarNumeroDePaises());
            break;
        case "2":
            var orden = prompt("Seleccione el orden:\n1. En el orden actual.\n2. En sentido inverso.\n3. Ordenados alfabéticamente.");
            mostrarListadoDePaises(orden);
            break;
        case "3":
            var intervalo = prompt("Introduzca el intervalo en formato inicio-fin:");
            var inicioFin = intervalo.split("-");
            alert(mostrarPaisesEnIntervalo(parseInt(inicioFin[0]), parseInt(inicioFin[1])));
            break;
        case "4":
            var paisNuevo = prompt("Ingrese el nombre del país a añadir:");
            var posicion = prompt("Seleccione la posición:\n1. Al principio.\n2. Al final.");
            anadirPais(paisNuevo, posicion);
            break;
        case "5":
            var posicion = prompt("Seleccione la posición:\n1. Al principio.\n2. Al final.");
            borrarPais(posicion);
            break;
        case "6":
            var consulta = prompt("Seleccione la consulta:\n1. Por posición.\n2. Por nombre.");
            consultarPais(consulta);
            break;
        default:
            alert("Opción no válida.");
            break;
    }
    mostrarMenu();

}

// Función para mostrar el listado de países según el orden seleccionado
function mostrarListadoDePaises(orden) {
    switch (orden) {
        case "1":
            alert(mostrarTodosLosPaises());
            break;
        case "2":
            alert(mostrarPaisesEnSentidoInverso());
            break;
        case "3":
            alert(mostrarPaisesOrdenadosAlfabeticamente());
            break;
        default:
            alert("Opción no válida.");
            break;
    }
}

// Función para añadir un país
function anadirPais(paisNuevo, posicion) {
    if (posicion === "1") {
        alert(anadirPaisAlPrincipio(paisNuevo));
    } else if (posicion === "2") {
        alert(anadirPaisAlFinal(paisNuevo));
    } else {
        alert("Opción no válida.");
    }
}

// Función para borrar un país
function borrarPais(posicion) {
    if (posicion === "1") {
        alert(borrarPaisAlPrincipio());
    } else if (posicion === "2") {
        alert(borrarPaisAlFinal());
    } else {
        alert("Opción no válida.");
    }
}

// Función para consultar un país
function consultarPais(consulta) {
    if (consulta === "1") {
        var posicion = prompt("Ingrese la posición del país:");
        alert(mostrarPaisPorPosicion(parseInt(posicion)));
    } else if (consulta === "2") {
        var pais = prompt("Ingrese el nombre del país:");
        alert(mostrarPosicionDePais(pais));
    } else {
        alert("Opción no válida.");
    }
}

// Variable global para almacenar la lista de países
var paises = [];

// Función para mostrar el número de elementos del array
function mostrarNumeroDePaises() {
    return "Número de países: " + paises.length;
}

// Función para mostrar todos los elementos del array
function mostrarTodosLosPaises() {
    return "Listado de países: " + paises.join(", ");
}

// Función para mostrar los elementos del array en sentido inverso
function mostrarPaisesEnSentidoInverso() {
    return "Países en sentido inverso: " + paises.slice().reverse().join(", ");
}

// Función para mostrar los elementos del array ordenados alfabéticamente
function mostrarPaisesOrdenadosAlfabeticamente() {
    return "Países ordenados alfabéticamente: " + paises.slice().sort().join(", ");
}

// Función para añadir un elemento al principio del array
function anadirPaisAlPrincipio(pais) {
    paises.unshift(pais);
    return "País añadido al principio: " + pais;
}

// Función para añadir un elemento al final del array
function anadirPaisAlFinal(pais) {
    paises.push(pais);
    return "País añadido al final: " + pais;
}

// Función para borrar un elemento al principio del array
function borrarPaisAlPrincipio() {
    var paisBorrado = paises.shift();
    return "País borrado del principio: " + paisBorrado;
}

// Función para borrar un elemento al final del array
function borrarPaisAlFinal() {
    var paisBorrado = paises.pop();
    return "País borrado del final: " + paisBorrado;
}

// Función para mostrar el elemento en una posición indicada por el usuario
function mostrarPaisPorPosicion(posicion) {
    return "País en la posición " + posicion + ": " + paises[posicion];
}

// Función para mostrar la posición en la que se encuentra un elemento que le indica el usuario.
function mostrarPosicionDePais(pais) {
    var posicion = paises.indexOf(pais);
    if (posicion !== -1) {
        return "El país " + pais + " se encuentra en la posición " + posicion;
    } else {
        return "El país " + pais + " no se encuentra en la lista.";
    }
}

// Función para mostrar los elementos que se encuentran en un intervalo que el usuario indica.
function mostrarPaisesEnIntervalo(inicio, fin) {
    return "Países en el intervalo " + inicio + "-" + fin + ": " + paises.slice(inicio, fin + 1).join(", ");
}
