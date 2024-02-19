// Seleccionar los elementos
const inputMatricula = document.getElementById('matricula');
const selectTipo = document.getElementById('tipo');

const images = [...document.querySelectorAll('img')];

const btnSubmit = document.getElementById('submitBtn');

const divResultado = document.getElementById('resultado');

// Ocultar todas las imágenes al inicio
// no hace falta, está ocultadas usando el atributo style en el html
// se podría hacer en el forEach de agregar event listener

// Mostrar las imágenes adecuadas dependiendo de la opción seleccionada en el campo "tipo"
selectTipo.addEventListener('change', (e) => {
  const value = e.target.value;

  let i = 0;

  if (value === 'automovil') {
    i = 2;
  } else if (value === 'camion') {
    i = 4;
  }

  images.forEach((img, index) => (img.style.display = index === i || index === i + 1 ? 'block' : 'none'));
});

// Añadir o quitar la clase "bordeRojo" a las imágenes al hacer clic en ellas
let imgBordeRojo = null;
images.forEach((img) =>
  img.addEventListener('click', (e) => {
    const img = e.target;

    // img.style.display = 'none';

    if (img.classList.contains('bordeRojo')) {
      img.classList.remove('bordeRojo');
      imgBordeRojo = null;
      return;
    }

    imgBordeRojo?.classList.remove('bordeRojo');

    img.classList.add('bordeRojo');
    imgBordeRojo = img;
  }),
);

// Mostrar los datos del formulario al hacer clic en el botón "Mostrar datos"
btnSubmit.addEventListener('click', () => {
  divResultado.innerHTML = `Matrícula: ${inputMatricula.value} <br>`;
  divResultado.innerHTML += `Tipo: ${selectTipo.value} <br>`;

  // Mostrar el atributo alt de las imágenes marcadas en rojo
  divResultado.innerHTML += imgBordeRojo ? `Imágenes seleccionadas: ${imgBordeRojo.alt}` : 'No se ha seleccionado ninguna imagen.';
});
