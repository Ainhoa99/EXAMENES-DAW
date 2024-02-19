new Vue({
  el: 'main',
  data: {
    tareas: [
      { titulo: 'Hacer la compra', completado: false },
      { titulo: 'Aprender Vue.js', completado: false },
      { titulo: 'Aprender Firebase', completado: false },
      { titulo: 'Dominar ES6', completado: false },
      { titulo: 'Salir a correr', completado: false },
    ],
    fondo: 'bg-warning',
  },
  methods: {
    completarTarea(tarea) {
      tarea.completado = !tarea.completado;
    },
  },
  computed: {
    // propiedad computada que me saca como resultado las tareas completadas
    tareasCompletadas() {
      return this.tareas.filter((tarea) => tarea.completado);
    },
  },
});
