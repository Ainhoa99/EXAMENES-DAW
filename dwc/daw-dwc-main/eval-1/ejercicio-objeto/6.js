class Usuario {
  constructor(nombre = '', apellidos = '', dni = '', year = 0, provincia = '') {
    this._nombre = typeof nombre === 'string' && nombre !== '' ? nombre : 'Augusto';
    this._apellidos = typeof apellidos === 'string' && apellidos !== '' ? apellidos : 'de la Cámara';
    this._dni = typeof dni === 'string' && dni !== '' ? dni : 'a123b';
    this._year = typeof year === 'number' && year >= 1900 ? year : 2002;
    this._provincia = typeof provincia === 'string' && provincia !== '' ? provincia : 'Bizkaia';
  }

  generarLogin = () => `${_nombre.charAt(0)}${_apellidos.charAt(0)}${_year.toString().substring(_year.toString().length - 2)}`;

  getEdad = () => {
    const fecha = new Date();
    return fecha.getFullYear() - _year;
  };

  toString = () => `${_nombre}, ${_apellidos}, ${_dni}, ${_year}, ${_provincia}`;

  toHTML = () => {
    const ul = document.createElement('ul');

    ul.innerHTML = `<li>${_nombre}</li>
<li>${_apellidos}</li>
<li>${_dni}</li>
<li>${_year}</li>
<li>${_provincia}</li>`;

    return ul;
  };

  set nombre(nombre) {
    this._nombre = typeof nombre === 'string' && nombre !== '' ? nombre : 'Augusto';
  }

  get nombre() {
    return this._nombre;
  }

  set apellidos(apellidos) {
    this._apellidos = typeof apellidos === 'string' && apellidos !== '' ? apellidos : 'de la Cámara';
  }

  get apellidos() {
    return this._apellidos;
  }

  set dni(dni) {
    this._dni = typeof dni === 'string' && dni !== '' ? dni : 'a123b';
  }

  get dni() {
    return this._dni;
  }

  set year(year) {
    this._year = typeof year === 'number' && year >= 1900 ? year : 2002;
  }

  get year() {
    return this._year;
  }

  set provincia(provincia) {
    this._provincia = typeof provincia === 'string' && provincia !== '' ? provincia : 'Bizkaia';
  }

  get provincia() {
    return this._provincia;
  }
}

const augusto = new Usuario();
const luka = new Usuario('Luka', 'Carmona', '1234a', 2003, 'Gipuzkoa');
const iker = new Usuario('Iker', 'González', '1234b', 2002, 'Bizkaia');
const ainhoa = new Usuario('Ainhoa', 'López', '1234c', 1999, 'Bizkaia');
