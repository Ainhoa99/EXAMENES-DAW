class Disco {
    constructor() {
        this.nombre = "";
        this.grupo = "";
        this.annoPublicacion = "";
        this.tipoMusica = "";
    }
}

var discos = [];

function mostrarMenu() {
    var opcion = prompt(
        "Seleccione una opción:\n" +
        "1. Mostrar número de discos.\n" +
        "2. Mostrar listado de discos.\n" +
        "3. Mostrar un intervalo de discos.\n" +
        "4. Añadir un disco.\n" +
        "5. Borrar un disco.\n" +
        "6. Consultar un disco."
    );
    ejecutarOpcion(opcion);
}

// Función para ejecutar la opción seleccionada por el usuario
function ejecutarOpcion(opcion) {
    switch (opcion) {
        case "1":
            alert(mostrarNumeroDediscos());
            break;
        case "2":
            var orden = prompt("Seleccione el orden:\n1. En el orden actual.\n2. En sentido inverso.\n3. Ordenados alfabéticamente.");
            mostrarListadoDediscos(orden);
            break;
        case "3":
            var intervalo = prompt("Introduzca el intervalo en formato inicio-fin:");
            var inicioFin = intervalo.split("-");
            alert(mostrardiscosEnIntervalo(parseInt(inicioFin[0]), parseInt(inicioFin[1])));
            break;
        case "4":
            var nombre = prompt("Ingrese el nombre del disco:");
            var grupo = prompt("Ingrese el grupo o cantante:");
            var annoPublicacion = prompt("Ingrese el año de publicación:");
            var tipoMusica = prompt("Ingrese el tipo de música (rock, pop, punk, indie):");
            var nuevoDisco = new Disco();
            nuevoDisco.nombre = nombre;
            nuevoDisco.grupo = grupo;
            nuevoDisco.annoPublicacion = annoPublicacion;
            nuevoDisco.tipoMusica = tipoMusica;            
            var posicion = prompt("Seleccione la posición:\n1. Al principio.\n2. Al final.");
            anadirDisco(nuevoDisco, posicion);
            console.log(discos)
            break;
        case "5":
            var posicion = prompt("Seleccione la posición:\n1. Al principio.\n2. Al final.");
            borrarDisco(posicion);
            break;
        case "6":
            var consulta = prompt("Seleccione la consulta:\n1. Por posición.\n2. Por nombre.");
            consultarDisco(consulta);
            break;
        default:
            alert("Opción no válida.");
            break;
    }
    mostrarMenu();

}

// Función para mostrar el listado de discos según el orden seleccionado
function mostrarListadoDediscos(orden) {
    switch (orden) {
        case "1":
            alert(mostrarTodosLosdiscos());
            break;
        case "2":
            alert(mostrardiscosEnSentidoInverso());
            break;
        case "3":
            alert(mostrardiscosOrdenadosAlfabeticamente());
            break;
        default:
            alert("Opción no válida.");
            break;
    }
}

// Función para añadir un disco
function anadirDisco(discoNuevo, posicion) {
    if (posicion === "1") {
        alert(anadirDiscoAlPrincipio(discoNuevo));
    } else if (posicion === "2") {
        alert(anadirDiscoAlFinal(discoNuevo));
    } else {
        alert("Opción no válida.");
    }
}

// Función para borrar un disco
function borrarDisco(posicion) {
    if (posicion === "1") {
        alert(borrarDiscoAlPrincipio());
    } else if (posicion === "2") {
        alert(borrarDiscoAlFinal());
    } else {
        alert("Opción no válida.");
    }
}

// Función para consultar un disco
function consultarDisco(consulta) {
    if (consulta === "1") {
        var posicion = prompt("Ingrese la posición del disco:");
        alert(mostrarDiscoPorPosicion(parseInt(posicion)));
    } else if (consulta === "2") {
        var Disco = prompt("Ingrese el nombre del disco:");
        alert(mostrarPosicionDeDisco(Disco));
    } else {
        alert("Opción no válida.");
    }
}

// Función para mostrar el número de elementos del array
function mostrarNumeroDediscos() {
    return "Número de discos: " + discos.length;
}

// Función para mostrar todos los elementos del array
function mostrarTodosLosdiscos() {
    return "Listado de discos: " + discos.join(", ");
}

// Función para mostrar los elementos del array en sentido inverso
function mostrardiscosEnSentidoInverso() {
    return "discos en sentido inverso: " + discos.slice().reverse().join(", ");
}

// Función para mostrar los elementos del array ordenados alfabéticamente
function mostrardiscosOrdenadosAlfabeticamente() {
    return "discos ordenados alfabéticamente: " + discos.slice().sort().join(", ");
}

// Función para añadir un elemento al principio del array
function anadirDiscoAlPrincipio(disco) {
    discos.unshift(disco);
    return "disco añadido al principio: " + disco.nombre;
}

// Función para añadir un elemento al final del array
function anadirDiscoAlFinal(disco) {
    discos.push(disco);
    return "disco añadido al final: " + disco;
}

// Función para borrar un elemento al principio del array
function borrarDiscoAlPrincipio() {
    var discoBorrado = discos.shift();
    return "disco borrado del principio: " + discoBorrado;
}

// Función para borrar un elemento al final del array
function borrarDiscoAlFinal() {
    var discoBorrado = discos.pop();
    return "disco borrado del final: " + discoBorrado;
}

// Función para mostrar el elemento en una posición indicada por el usuario
function mostrarDiscoPorPosicion(posicion) {
    return "disco en la posición " + posicion + ": " + discos[posicion];
}

// Función para mostrar la posición en la que se encuentra un elemento que le indica el usuario.
function mostrarPosicionDeDisco(disco) {
    var posicion = discos.indexOf(disco);
    if (posicion !== -1) {
        return "El disco " + disco + " se encuentra en la posición " + posicion;
    } else {
        return "El disco " + disco + " no se encuentra en la lista.";
    }
}

// Función para mostrar los elementos que se encuentran en un intervalo que el usuario indica.
function mostrardiscosEnIntervalo(inicio, fin) {
    return "discos en el intervalo " + inicio + "-" + fin + ": " + discos.slice(inicio, fin + 1).join(", ");
}
