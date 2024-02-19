const { createApp } = Vue;

createApp({
  data() {
    return {
      fondoInput: 'bg-info',
      fondoBtn: false,
    };
  },
  methods: {
    cambiarFondoBtn() {
      this.fondoBtn = !this.fondoBtn;
    },
  },
  computed: {},
}).mount('main');
