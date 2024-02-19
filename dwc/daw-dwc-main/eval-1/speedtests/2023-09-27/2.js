const original = document.querySelector('#original').innerText;
const parrafoEliminados = document.querySelector('#eliminados');

const textoModificado = original.replaceAll(/\b[Nn][Oo]\b/g, '');
parrafoEliminados.innerText = textoModificado;

const textoOcurrencias = document.querySelector('#ocurrencias');
const inputBusqueda = document.querySelector('#strBuscar');

document.querySelector('#buscar').addEventListener('click', () => {
  const palabra = inputBusqueda.value.toLowerCase();
  if (palabra.length === 0) return;
  const rg = new RegExp(`\\b${palabra}\\b`, 'g');
  textoOcurrencias.innerText = (textoModificado.toLowerCase().match(rg) || []).length;
});
