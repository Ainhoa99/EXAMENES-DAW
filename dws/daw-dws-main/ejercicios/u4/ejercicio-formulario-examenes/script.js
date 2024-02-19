const inputs = [...document.querySelectorAll('input')];
const select = document.querySelector('select');

document.querySelector('#borrar').addEventListener('click', (e) => {
  e.preventDefault();

  inputs.forEach((input) => (input.value = ''));
  if (select === null || select === undefined) return;
  select.value = 'primero';
});
