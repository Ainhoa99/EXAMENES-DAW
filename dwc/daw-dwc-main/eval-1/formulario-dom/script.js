const container = document.querySelector('.container');
const campoNombre = document.querySelector('#nombre');
const campoEmail = document.querySelector('#email');
const divSelect = document.querySelector('.informacion');
const selectCiclo = divSelect.querySelector('select');

document.querySelector('#validar').addEventListener('click', (e) => {
  e.preventDefault();

  document.querySelector('#informacion')?.remove();
  divSelect.classList.add('oculto');
  campoNombre.classList.remove('error');
  campoEmail.classList.remove('error');
  selectCiclo.selectedIndex = 0;

  if (!/^[A-Za-zÀ-ÖØ-öø-ÿ ]{1,20}$/.test(campoNombre.value)) return mostrarError(campoNombre);
  if (
    !/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,100})$/.test(campoEmail.value)
  )
    return mostrarError(campoEmail);

  divSelect.classList.remove('oculto');
});

selectCiclo.addEventListener('input', (e) => {
  e.preventDefault();
  document.querySelector('#informacion')?.remove();

  const ciclo = e.target.value;

  const divInformacion = document.createElement('div');
  divInformacion.id = 'informacion';

  const headingUsuario = document.createElement('h2');
  headingUsuario.innerText = `Nombre: ${campoNombre.value},
  Correo: ${campoEmail.value}`;

  const parrafoCiclo = document.createElement('p');
  parrafoCiclo.innerText = `Ciclo: ${ciclo}`;

  divInformacion.append(headingUsuario, parrafoCiclo);
  container.appendChild(divInformacion);
});

const mostrarError = (campo) => {
  campo.classList.add('error');
  campo.focus();
};
