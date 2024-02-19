const texto = document.querySelector('#texto');
const birthdateInput = document.querySelector('#birthdate');
const btnCalcular = document.querySelector('#btnCalcular');
const currentDate = new Date();

btnCalcular.addEventListener('click', () => handleClick());

const handleClick = () => {
  if (birthdateInput.value === '') return error(true);
  error(false);

  const birthdate = new Date(birthdateInput.value);

  let age = currentDate.getFullYear() - birthdate.getFullYear();

  const monthDiff = currentDate.getMonth() - birthdate.getMonth();
  if (monthDiff < 0 || (monthDiff === 0 && currentDate.getDate() < birthdate.getDate())) age--;

  if (age < 0) return error(true);

  texto.innerText = `Edad: ${age}`;
};

const error = (agregar) => (agregar ? birthdateInput.classList.add('error') : birthdateInput.classList.remove('error'));
