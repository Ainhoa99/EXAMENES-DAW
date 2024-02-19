const PATTERN = /^[A-Za-z\s]+$/;
let edadPersona;
let nombrePersona;
let emailPersona;
let actividadSelect;
let texto;
let textoError;
let divInformacion;

// ERROR: nunca se llama a la función inicio()
document.addEventListener('DOMContentLoaded', inicio);
function inicio() {
  edadPersona = document.getElementById('edad');
  nombrePersona = document.getElementById('nombre');
  emailPersona = document.getElementById('email');
  actividadSelect = document.getElementById('actividad');

  // ERROR: getElementsByClassName() devuelve una lista de elementos, no un elemento único
  divInformacion = document.getElementsByClassName('informacion')[0];

  texto = document.getElementById('info');
  textoError = document.getElementById('errorAct');

  // ERROR: no hace falta buscar el div cada vez que se quiera cambiar el display
  divInformacion.style.display = 'none';
  document.getElementById('validar').addEventListener('click', validarFormulario);

  // botón restaurar
  divInformacion.querySelector('[type="button"]').addEventListener('click', restaurarFormulario);
}

function validarFormulario(e) {
  // ERROR: no usa e.preventDefault() para evitar que el navegador haga las comprobaciones por defecto
  e.preventDefault();

  // ERROR: no es necesario buscar el select cada vez que se pulse el botón
  actividadSelect.addEventListener('change', mostrarInformacion);

  // ERROR: el div de información se muestra aunque haya errores
  if (validar()) {
    // ERROR: getElementsByClassName() devuelve una lista de elementos, no un elemento único
    divInformacion.style.display = 'block';
  } else {
    divInformacion.style.display = 'none';
  }
}

function mostrarInformacion(e) {
  let opcion = e.target.value;
  let riesgo = 3;

  // ERROR: el texto y el texto de error no desaparecen al seleccionar la primera opción
  if (opcion == 0) {
    texto.innerHTML = '';
    textoError.innerHTML = '';
  } else {
    // ERROR: la comparación no es correcto, tiene que ser ==
    // ERROR: la variable riesgo no existe
    // ERROR: edadPersona es el elemento input, no el valor
    if (opcion == riesgo && edadPersona.value < 18) {
      // ERROR: el texto de agradecimiento no desaparece
      texto.innerHTML = '';
      textoError.innerHTML = 'No puedes seleccionar esta actividad';
    } else {
      texto.innerHTML = 'Gracias ' + nombrePersona.value + '. Te enviamos al mail la información solicitada sobre la actividad.';
      // ERROR: el texto de error no desaparece
      textoError.innerHTML = '';
    }
  }
}

function validar() {
  // ERROR: el parámetro debe ir entre comillas
  let formularioError = document.getElementById('formError');
  // ERROR: solo se va a mostrar el último error encontrado
  let errores = [];

  // ERROR: valueMissing no es un método
  if (valueMissing(edadPersona)) {
    errores.push('La edad es un campo obligatorio.');
  }

  if (valueMissing(nombrePersona)) {
    errores.push('El nombre es un campo obligatorio.');
  }

  if (valueMissing(emailPersona)) {
    errores.push('El mail es un campo obligatorio.');
  }

  if (PATTERN.test(nombrePersona)) {
    errores.push('El nombre solo debe de contener letras o espacios.');
  }

  // ERROR: formularioError es un p por lo tanto no tiene value
  formularioError.innerHTML = errores.join('<br>');
  if (errores.length > 0) return false;

  return true;
}

const valueMissing = (campo) => campo.value === '';

function restaurarFormulario(e) {
  e.preventDefault();

  edadPersona.value = '';
  nombrePersona.value = '';
  emailPersona.value = '';

  texto.innerHTML = '';
  textoError.innerHTML = '';

  actividadSelect.value = 0;

  divInformacion.style.display = 'none';
}
