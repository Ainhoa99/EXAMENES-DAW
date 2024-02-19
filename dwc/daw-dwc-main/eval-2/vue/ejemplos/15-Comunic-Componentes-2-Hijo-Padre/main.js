const app = Vue.createApp({});

app.component('padre', {
  template: /* html */ `
<div class="p-5 bg-dark text-white">
  <h2>Componente Padre: {{ numeroPadre }}</h2>

  <button class="btn btn-danger" @click="numeroPadre++">+</button>
  <!-- le envío a hijo un dato que se llama numero con contenido 5 -->
  <hijo numero="5"></hijo>
  <hijo :numero="numeroPadre" @nombreHijo="nombrePadre = $event"></hijo>
  <!-- aquí le envío el dato numer, pero en este aso está
  bindeado numeropadre que es un dato de este componente -->
  {{ "Este dato es recibido desde el hijo: "+ nombrePadre }}
</div>
`,
  data() {
    return {
      numeroPadre: 0,
      nombrePadre: '', // este dato será el que reciba el dato emitido desde el hijo
    };
  },
});

app.component('hijo', {
  /* html */
  template: `
<div class="py-5 bg-success">
    <h4>Componente hijo</h4>
    <h5>{{ numero }}</h5>
    <!-- Este dato irá del componente hijo al padre-->
    <h4>Nombre: {{ nombre }}</h4>
</div>
`,
  props: ['numero'], // en props recibo los datos que nos manda el componente padre,
  data() {
    return {
      nombre: 'Txomin hijo', // como es un dato del componente lo tengo que declarar aquí
    };
  },
  watch: {
    // esta funcion observa en todo momento si la variable nombre se modifica
    nombre: function () {
      return this.$emit('nombreHijo', this.nombre);
    },
  },
  mounted() {
    // esta funcion se ejecuta después de que la instancia VUE y el DOM ya está montado
    this.$emit('nombreHijo', this.nombre); // de esta manera emito el evento hacia el componente padre
  },
});

app.mount('div');
