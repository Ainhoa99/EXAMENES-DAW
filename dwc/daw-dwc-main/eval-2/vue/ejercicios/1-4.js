const { createApp } = Vue;

createApp({
  data() {
    return {
      frutaNueva: null,
      frutas: [
        { nombre: 'Pera', cantidad: 10 },
        { nombre: 'Manzana', cantidad: 0 },
        { nombre: 'Plátano', cantidad: 11 },
      ],
      minCantidad: 0,
      busqueda: '',
    };
  },
  methods: {
    agregarFrutaNueva() {
      if (this.frutaNueva) {
        this.frutas.push({ nombre: this.frutaNueva, cantidad: 0 });
        this.frutaNueva = null;
      }
    },
  },
  computed: {
    cantidadTotal() {
      return this.frutas.reduce((total, fruta) => (total += fruta.cantidad), 0); // cantidad inicial = 0
    },
    frutasMin() {
      return this.frutas.filter((fruta) => fruta.cantidad >= this.minCantidad);
    },
    frutasBusqueda() {
      return this.frutas.filter((fruta) => fruta.nombre.toLowerCase().includes(this.busqueda.toLowerCase()));
    },
  },
}).mount('main');
