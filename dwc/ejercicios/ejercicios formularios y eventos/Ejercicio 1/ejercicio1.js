// Definición de la clase Disco
class Disco {
    constructor(nombre, grupo, anno_publicacion, tipo_musica, localizacion, prestado) {
      this.nombre = nombre;
      this.grupo = grupo;
      this.anno_publicacion = anno_publicacion;
      this.tipo_musica = tipo_musica;
      this.localizacion = localizacion;
      this.prestado = prestado;
    }
}

// Array de discos
let discos = [];

document.querySelector('#validar').addEventListener('click', (e) => {
    e.preventDefault();

    const nombre = document.getElementById('nombre_disco').value;
    const grupo = document.getElementById('grupo').value;
    const anno_publicacion = parseInt(document.getElementById('anno_publicacion').value);
    const tipo_musica = document.getElementById('tipo_musica').value;
    const localizacion = document.getElementById('localizacion').value;
    const prestado = document.getElementById('prestado').checked;

    const nuevoDisco = new Disco(nombre, grupo, anno_publicacion, tipo_musica, localizacion, prestado);

    var posicion = prompt("Seleccione la posición:\n1. Al principio.\n2. Al final.");
     
    if (posicion === "1") {
        discos.unshift(nuevoDisco);
    } else if (posicion === "2") {
        discos.push(nuevoDisco);
    } else {
        alert("Opción no válida.");
    }

    console.log('Nuevo disco agregado:', nuevoDisco);
    console.log('Array de discos actualizado:', discos);
});
