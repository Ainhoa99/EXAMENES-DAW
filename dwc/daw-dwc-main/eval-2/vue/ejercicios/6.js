const { createApp } = Vue;

createApp({
  data() {
    return {
      deporteNuevo: null,
      deportes: [],
    };
  },
  methods: {
    agregarDeporteNuevo() {
      if (this.deporteNuevo) {
        const index = this.deportes.push({
          nombre: this.deporteNuevo,
          estado: false,
        });

        this.deportes[index - 1].num = index;

        this.deporteNuevo = null;
      }
    },
    completarDeporte(deporte) {
      deporte.estado = true;
    },
    eliminarDeporte(index) {
      this.deportes.splice(index, 1);
    },
  },
  computed: {},
}).mount('main');
