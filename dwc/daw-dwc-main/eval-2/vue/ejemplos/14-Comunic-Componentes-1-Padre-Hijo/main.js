const app = Vue.createApp({});

app.component('padre', {
  template:
    /* html */
    `
<div class="p-5 bg-dark text-white">
  <h2>Componente Padre: {{ numeroPadre }}</h2>
  <button class="btn btn-danger" @click="numeroPadre++">+</button>
  <!-- le envío a hijo un dato que se llama numero con contenido "5" -->
  <hijo numero="5"></hijo>
  <!-- aquí le envío el dato numero, pero en este caso
  está bindeado numeropadre que es un dato de este componente -->
  <hijo :numero="numeroPadre"></hijo>
</div>
`,
  data() {
    return {
      numeroPadre: 0,
    };
  },
});
app.component('hijo', {
  template:
    /* html */
    `<div class="py-5 bg-success">
                    <h4 >Componente hijo</h4>
                    <h5>{{ numero }}</h5>
                </div>
                `,
  props: ['numero'], //en props recibo los datos que nos manda el componente padre
});

app.mount('#app');
