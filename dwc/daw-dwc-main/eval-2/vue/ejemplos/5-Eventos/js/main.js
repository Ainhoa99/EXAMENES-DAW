//Vuejs 2
// const vm = new Vue({
//   el: 'main',
//   data: {
//     nuevaTarea: null,
//     tareas: ['Aprender Vue.js', 'Aprender ES6', 'Publicar algo todos los días'],
//   },
//   methods: {
//     //agregarTarea: function(){
//     // this, hace referencia a la instancia Vue
//     //               this.tareas.unshift(this.nuevaTarea);
//     //               this.nuevaTarea = null;}
//     agregarTarea() {
//       // this, hace referencia a la instancia Vue
//       this.tareas.unshift(this.nuevaTarea);
//       this.nuevaTarea = null;
//     },
//   },
// });

//Vuejs 3
const vm = {
  data() {
    return {
      nuevaTarea: null,
      tareas: ['Aprender Vue.js', 'Aprender ES6', 'Publicar algo todos los días'],
    };
  },
  methods: {
    //  agregarTarea: function(){
    //                     // this, hace referencia a la instancia Vue
    //                     this.tareas.unshift(this.nuevaTarea);
    //                     this.nuevaTarea = null;
    //                 }
    // ES6
    agregarTarea() {
      // this, hace referencia a la instancia Vue
      this.tareas.unshift(this.nuevaTarea);
      this.nuevaTarea = null;
    },
  },
};
Vue.createApp(vm).mount('main');

//Vanilla JavaScript
// function agregarTarea() {
//     const input = document.querySelector('input[type=text]');
//     vm.tareas.unshift(input.value);
//     input.value = '';
// }
