function Usuario(nombre = '', apellidos = '', dni = '', year = 0, provincia = '') {
  this.nombre = typeof nombre === 'string' && nombre !== '' ? nombre : 'Augusto';
  this.apellidos = typeof apellidos === 'string' && apellidos !== '' ? apellidos : 'de la Cámara';
  this.dni = typeof dni === 'string' && dni !== '' ? dni : 'a123b';
  this.year = typeof year === 'number' && year >= 1900 ? year : 2002;
  this.provincia = typeof provincia === 'string' && provincia !== '' ? provincia : 'Bizkaia';

  this.generarLogin = () => `${nombre.charAt(0)}${apellidos.charAt(0)}${year.toString().substring(year.toString().length - 2)}`;
  this.getEdad = () => {
    const fecha = new Date();
    return fecha.getFullYear() - this.year;
  };
  this.toString = () => `${this.nombre}, ${this.apellidos}, ${this.dni}, ${this.year}, ${this.provincia}`;
  this.toHTML = () => {
    const ul = document.createElement('ul');

    ul.innerHTML = `<li>${this.nombre}</li>
<li>${this.apellidos}</li>
<li>${this.dni}</li>
<li>${this.year}</li>
<li>${this.provincia}</li>`;

    return ul;
  };
}

let u1 = new Usuario('hola', 'a', 'asf', 1111, 'asdf');
let u2 = new Usuario();
// u.setNombre('');
console.log(u1.toString());
console.log(u2.toString());

document.body.appendChild(u2.toHTML());
