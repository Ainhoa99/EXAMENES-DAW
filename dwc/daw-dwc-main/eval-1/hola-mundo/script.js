const btn = document.querySelector('#mostrarMensaje');
btn.addEventListener('click', () => {
  const mensaje = document.createElement('h1');
  mensaje.innerText = 'hola buenas tardes';
  document.body.appendChild(mensaje);
});
