const vm = {
  data() {
    return {
      mensaje: 'Hola Mundo :) !',
      nuevaTarea: null,
      tareas: [
        {
          titulo: 'Aprender Vue.js',
          prioridad: true,
          antiguedad: 23,
        },
        {
          titulo: 'Aprender ES6',
          prioridad: false,
          antiguedad: 135,
        },
        {
          titulo: 'Publicar algo todos los días',
          prioridad: true,
          antiguedad: 378,
        },
      ],
    };
  },
  methods: {
    agregarTarea() {
      // this, hace referencia a la instancia Vue
      this.tareas.unshift({
        titulo: this.nuevaTarea,
        prioridad: false,
        antiguedad: 0,
      });
      this.nuevaTarea = null;
    },
  },
  computed: {
    mensajeAlReves() {
      return this.mensaje.split('').reverse().join('');
    },
    tareasConPrioridad() {
      return this.tareas.filter(function (tarea) {
        return tarea.prioridad;
      });
      // return this.tareas.filter((tarea) => tarea.prioridad);
    },
    tareasPorAntiguedad() {
      // return this.tareas.sort(function(a, b){
      //        return b.antiguedad - a.antiguedad;
      // });
      return this.tareas.sort((a, b) => b.antiguedad - a.antiguedad);
    },
  },
};

Vue.createApp(vm).mount('main');
