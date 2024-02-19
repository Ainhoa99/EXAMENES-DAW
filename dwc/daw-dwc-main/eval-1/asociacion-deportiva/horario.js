const main = document.querySelector('main');

const crearTabla = (morning) => {
  agregarTitle(morning ? 'Mañanas' : 'Tardes');

  const tabla = document.createElement('table');
  agregarNombreDays(tabla, morning);

  const [min, max, step, dayCount] = crearVarBucle(morning);

  for (let i = min; i <= max; i += step) {
    const fila = document.createElement('tr');
    for (let j = 1; j <= dayCount + 1; j++) {
      let celda;
      if (j === 1) {
        celda = document.createElement('th');
        celda.innerText = `${String(i).padStart(2, '0')}:00 - ${String(i + step).padStart(2, '0')}:00`;
      } else {
        celda = document.createElement('td');
        celda.innerText = `hora inicio: ${i};
        num día: ${j - 1}`;
      }

      fila.appendChild(celda);
    }

    tabla.appendChild(fila);
  }

  main.appendChild(tabla);
};

const agregarTitle = (mensaje) => {
  const title = document.createElement('h3');
  title.innerText = mensaje;
  main.appendChild(title);
};

const crearVarBucle = (morning) => {
  let min, max, step, dayCount;

  if (morning) {
    min = 9;
    max = 15 - 2;
    step = 2;
    dayCount = 5;
  } else {
    min = 16;
    max = 21 - 1;
    step = 1;
    dayCount = 7;
  }

  return [min, max, step, dayCount];
};

const agregarNombreDays = (tabla, morning) => {
  const nombreDays = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

  const filaDays = document.createElement('tr');
  const dayLimit = morning ? 5 : 7;

  const emptyCell = document.createElement('th');
  emptyCell.classList.add('emptyCell');
  filaDays.appendChild(emptyCell);

  for (let i = 0; i < dayLimit; i++) {
    const celda = document.createElement('th');
    celda.innerText = nombreDays[i];
    filaDays.appendChild(celda);
  }

  tabla.appendChild(filaDays);
};

crearTabla(true);
crearTabla(false);
