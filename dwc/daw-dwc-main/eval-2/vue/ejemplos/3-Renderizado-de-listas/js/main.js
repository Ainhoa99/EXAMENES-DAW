//Vuejs 2
// const vm = {
//   el: 'main',
//   data: {
//     laborales: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'],
//     tareas: [
//       { nombre: 'Hacer la compra', prioridad: 'baja' },
//       { nombre: 'Aprender Vue', prioridad: 'alta' },
//       { nombre: 'Ir al gimnasio', prioridad: 'baja' },
//     ],
//     persona: {
//       nombre: 'Txomin',
//       profesion: 'dev',
//       ciudad: 'Bilbao',
//     },
//   },
// };

//Vuejs 3
const vm = {
  data() {
    return {
      laborales: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'],
      tareas: [
        { nombre: 'Hacer la compra', prioridad: 'baja' },
        { nombre: 'Aprender Vue', prioridad: 'alta' },
        { nombre: 'Ir al gimnasio', prioridad: 'baja' },
      ],
      persona: {
        nombre: 'Txomin',
        profesion: 'dev',
        ciudad: 'Bilbao',
      },
    };
  },
};

Vue.createApp(vm).mount('main');
