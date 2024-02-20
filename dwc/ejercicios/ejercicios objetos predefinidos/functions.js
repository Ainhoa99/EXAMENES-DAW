function diasNochevieja() {
    var ahora = new Date();
    var anyo = ahora.getFullYear();

    var nochevieja = new Date("'" + anyo + "-12-31'");

    var total = Math.ceil((nochevieja - ahora) / 86400000);

    var mensaje = "Quedan " + total + " días para nochevieja.";
    document.write("<h2>Ejercicio 1</h2><p>" + mensaje + "</p><br><br>");

    alert(mensaje);
}

function domingos() {
    var entrada = prompt("Escribe tu compleaños en formato 'mes-día'.");

    var ahora = new Date();
    var anyo = ahora.getFullYear();

    var mensaje = "";

    for (var i = anyo; i <= 2100; i++) {
        var cumple = new Date("'" + i + "-" + entrada + "'");
        if (cumple.getDay() == 0) {
            mensaje += (i + "\n");
        }
    }

    document.write("<h2>Ejercicio 2</h2><p>" + mensaje + "</p><br>");
    alert(mensaje);
}

function formatoFechas() {
    var ahora = new Date();

    var formato = prompt("¿En qué formato quiere que muestre la fecha acual?\n1) dd/mm/aaaa\n" +
        "2) Día, dd de mes de aaaa\n3) Day, Month dd, yyyy");

    var mensaje;

    switch (formato) {
        case "1":
            mensaje = mostrarFecha1(ahora);
            break;
        case "2":
            mensaje = mostrarFecha2(ahora);
            break;
        case "3":
            mensaje = mostrarFecha3(ahora);
            break;
        default: alert("No se ha introducido una opción válida.")

    }
    alert(mensaje);
    document.write("<h2>Ejercicio 3</h2><p>" + mensaje + "</p><br><br>");

}

function mostrarFecha1(fecha) {
    var dia = fecha.getDate();
    var mes = fecha.getMonth();
    var anyo = fecha.getFullYear();
    return (dia + "/" + (mes + 1) + "/" + anyo);
}

function mostrarFecha2(fecha) {
    var dia = fecha.getDate();
    var diaSemana = fecha.getDay();
    var diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    var mes = fecha.getMonth();
    var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto",
        "septiembre", "octubre", "noviembre", "diciembre"];
    var anyo = fecha.getFullYear();
    return (diasSemana[diaSemana] + ", " + dia + " de " + meses[mes] + " de " + anyo);
}

function mostrarFecha3(fecha) {
    var dia = fecha.getDate();
    var diaSemana = fecha.getDay();
    var diasSemana = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var mes = fecha.getMonth();
    var meses = ["January", "February", "March", "April", "May", "June", "July", "August",
        "September", "October", "November", "December"];
    var anyo = fecha.getFullYear();
    return (diasSemana[diaSemana] + ", " + meses[mes] + " " + dia + ", " + anyo);
}

function formatoHoras() {
    var ahora = new Date();

    var formato = prompt("¿En qué formato quiere que muestre la hora acual?\n1) hh:mm:ss\n" +
        "2) hh:mm AM/PM");

    var mensaje;

    switch (formato) {
        case "1":
            mensaje = mostrarHora1(ahora);
            break;
        case "2":
            mensaje = mostrarHora2(ahora);
            break;
        default: alert("No se ha introducido una opción válida.")

    }
    alert(mensaje);
    document.write("<h2>Ejercicio 4</h2><p>" + mensaje + "</p><br><br>");
}

function mostrarHora1(ahora) {
    var horas = ahora.getHours();
    var minutos = ahora.getMinutes();
    var segundos = ahora.getSeconds();

    return (horas + ":" + minutos + ":" + segundos);
}

function mostrarHora2(ahora) {
    var horas = ahora.getHours();
    var minutos = ahora.getMinutes();
    var segundos = ahora.getSeconds();
    var letras = "AM";

    if (horas > 12) {
        horas -= 12;
        letras = "PM";
    }

    return (horas + ":" + minutos + ":" + segundos + " " + letras);
}

function cientifica() {
    var opcion = prompt("¿Qué operación deseas hacer?\n1) Potencia\n2) Raíz\n" +
        "3) Redondeo\n4) Trigonometría");
    var mensaje;
    switch (opcion) {
        case "1":
            var base = prompt("Introduce la base: ")
            base = parseInt(base, 10);
            if (isNaN(base)) {
                mensaje = "No ha introducido un número.";
                break;
            }
            var exponente = prompt("Introduce el exponente: ");
            exponente = parseInt(exponente, 10);
            if (isNaN(exponente)) {
                mensaje = "No ha introducido un número.";
                break;
            }
            var resultado = Math.pow(base, exponente);
            mensaje = (base + " elevado a la " + exponente + " es igual a " + resultado);
            break;
        case "2":
            var num = prompt("Introduce un número que no sea negativo: ");
            num = parseInt(num);
            if (isNaN(num)) {
                mensaje = "No ha introducido un número.";
                break;
            }
            else if (num < 0) {
                mensaje = "El número introducido es negativo.";
                break;
            }
            var resultado = Math.sqrt(num);
            mensaje = "La raíz cuadrada de " + num + " es " + resultado;
            break;
        case "3":
            var num = prompt("Introduce un número con decimales: ");
            num = parseFloat(num);
            if (isNaN(num)) {
                mensaje = "No ha introducido un número.";
                break;
            }
            var redondeo = Math.round(num);
            var arriba = Math.ceil(num);
            var abajo = Math.floor(num);
            mensaje = "El entero más próximo de " + num + " es " + redondeo + ", a la alta es " + arriba +
                " y a la baja es " + abajo;
            break;
        case "4":
            var ang = prompt("Introduce un ángulo en radianes: ");
            ang = parseInt(ang);
            if (isNaN(ang)) {
                mensaje = "No ha introducido un número.";
                break;
            }
            var sen = Math.sin(ang);
            var cos = Math.cos(ang);
            var tan = Math.tan(ang);
            mensaje = "Ángulo introducido: " + ang + "\nSeno: " + sen + "\nCoseno: " + cos +
                "\nTangente: " + tan;
            break;
    }
    alert(mensaje);
    document.write("<h2>Ejercicio 5</h2><p>" + mensaje + "</p><br><br>");
}

function circulo() {
    var radio = prompt("Introduce el radio del círculo en centímetros:");
    radio = parseFloat(radio);
    if (isNaN(radio)) {
        alert("No ha introducido un número.");
    } else {
        diam = radio * 2;
        perim = 2 * radio * Math.PI;
        area = Math.PI * Math.pow(radio, 2);
        areaEsf = 4 * Math.PI * Math.pow(radio, 2);
        volumenEsf = 4 / 3 * Math.PI * Math.pow(radio, 3);
        var mensaje = "Radio círculo: " + parseFloat(radio).toFixed(2) + "cm\nDiámetro círculo: " +
            parseFloat(diam).toFixed(2) + "cm\nPerímetro círculo: " + parseFloat(perim).toFixed(2) + "cm\nÁrea círculo: " +
            parseFloat(area).toFixed(2) + "cm²\nÁrea esfera: " + parseFloat(areaEsf).toFixed(2) + "cm²\nVolumen esfera: " +
            parseFloat(volumenEsf).toFixed(2) + "cm³";
        alert(mensaje);
        document.write("<h2>Ejercicio 6</h2><p>" + mensaje + "</p><br><br>");
    }
}

function number() {
    var ent = prompt("Introduce un número entero:");
    ent = parseInt(ent);
    if (isNaN(ent)) {
        alert("No ha introducido un número.");
    } else {
        var exp = ent.toExponential();
        var dec = ent.toFixed(4);
        var bin = ent.toString(2);
        var oct = ent.toString(8);
        var hex = ent.toString(16);
        var mensaje = "Valor exponencial: " + exp + "\nCuatro decimales: " + dec + "\nBinario: " + bin + "\nOctal: " + oct +
            "\nHexadecimal: " + hex;
        alert(mensaje);
        document.write("<h2>Ejercicio 7</h2><p>" + mensaje + "</p><br><br>");
    }
}

function nombreApellidos() {
    var nombreApellidos = prompt("Escriba su nombre y dos apellidos");
    var nombreApellidosArray = nombreApellidos.split(" ");
    var long = 0;
    for (var i = 0; i < nombreApellidosArray.length; i++) {
        long += nombreApellidosArray[i].length;
        /*if (i<nombreApellidosArray.length-2) nombre += nombreApellidosArray[i]+" ";
        */
    }
    var mensaje = "Longitud sin contar espacios: " + long;
    alert(mensaje);
    document.write("<h2>Ejercicio 8</h2><p>" + mensaje + "</p>");

    var minusculas = nombreApellidos.toLowerCase();
    var mayusculas = nombreApellidos.toUpperCase();
    mensaje = "En minúsculas: " + minusculas;
    alert(mensaje);
    document.write("<p>" + mensaje + "</p>");

    mensaje = "En mayúsculas: " + mayusculas;
    alert(mensaje);
    document.write("<p>" + mensaje + "</p>");

    var nombre = "";
    for (var i = 0; i < nombreApellidosArray.length - 2; i++) {
        nombre += nombreApellidosArray[i] + " ";
    }
    var primerApellido = nombreApellidosArray[nombreApellidosArray.length - 2];
    var segundoApellido = nombreApellidosArray[nombreApellidosArray.length - 1];
    mensaje = "Nombre: " + nombre + "\nApellido 1: " + primerApellido + "\nApellido 2: " + segundoApellido;
    alert(mensaje);
    document.write("<p>Nombre: " + nombre + "<br>Apellido 1: " + primerApellido + "<br> Apellido 2: " + segundoApellido + "</p>");

    var user1 = nombre.slice(0, 1) + primerApellido + segundoApellido.slice(0, 1);
    mensaje = "Primer nombre de usuario propuesto: " + user1.toLowerCase();
    alert(mensaje);
    document.write("<p>" + mensaje + "</p>");

    var user2 = nombre.slice(0, 3) + primerApellido.slice(0, 3) + segundoApellido.slice(0, 3);
    mensaje = "Segundo nombre de usuario propuesto: " + user2.toLowerCase();
    alert(mensaje);
    document.write("<p>" + mensaje + "</p>");
}

function contraseña() {
    var valida = true;
    document.write("<h2>Ejercicio 9</h2><br>");
    do {
        var pass = prompt("Escriba una contraseña");
        var error = "Contraseña inválida. Debe tener entre 8 y 16 caracteres y al menos una letra mayúscula, " +
            "una minúscula, un número y un caracter entre los siguientes valores: -, _, @, #, $, % o &";
        //validar longitud contraseña
        if (!(pass.length >= 8 && pass.length <= 16)) {
            valida = false;
            alert(error);
            document.write(`Contraseña introducida: <b>${pass}</b><br>${error}<br><br>`);
            //validar letra minúscula
        } else if (pass.match(/[a-z]/) === null) {
            valida = false;
            alert(error);
            document.write(`Contraseña introducida: <b>${pass}</b><br>${error}<br><br>`);
            //validar letra mayúscula
        } else if (pass.match(/[A-Z]/) === null) {
            valida = false;
            alert(error);
            document.write(`Contraseña introducida: <b>${pass}</b><br>${error}<br><br>`);
            //validar numero
        } else if (pass.match(/\d/) === null) {
            valida = false;
            alert(error);
            document.write(`Contraseña introducida: <b>${pass}</b><br>${error}<br><br>`);
        } else if (pass.match(/[-_@#$%&]/) === null) {
            valida = false;
            alert(error);
            document.write(`Contraseña introducida: <b>${pass}</b><br>${error}<br><br>`);
        } else {
            valida = true;
            alert("La contraseña es segura.");
            document.write(`Contraseña introducida: <b>${pass}</b><br>La contraseña es segura.<br>`);
        }
    } while (!valida)
    document.write("<br>");
}
