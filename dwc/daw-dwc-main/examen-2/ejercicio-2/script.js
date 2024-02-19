const { createApp } = Vue;

createApp({
  data() {
    return {
      pokemonList: [],
      filtroTipo: '',
      nuevoNombre: '',
      nuevoTipo: '',
      nuevaHabilidad: '',
    };
  },
  mounted() {
    axios
      .get(`./pokemon.json`)
      .then((res) => (this.pokemonList = res.data.results))
      .catch((err) => console.log(err));
  },
  methods: {
    agregar(e) {
      e.preventDefault();

      if (this.nuevoNombre === '' || this.nuevoTipo === '' || this.nuevaHabilidad === '') return;

      this.pokemonList.push({ name: this.nuevoNombre, type: this.nuevoTipo, ability: this.nuevaHabilidad });

      this.nuevoNombre = '';
      this.nuevoTipo = '';
      this.nuevaHabilidad = '';
    },
    borrar(index) {
      const name = this.listaFiltrada[index].name;

      this.pokemonList = this.pokemonList.filter((pokemon) => pokemon.name !== name);

      if (this.listaFiltrada.length === 0) this.filtroTipo = '';
    },
  },
  computed: {
    types() {
      let types = [];

      this.pokemonList
        .map((pokemon) => pokemon.type)
        .sort()
        .forEach((type) => {
          if (!types.includes(type)) types.push(type);
        });

      return types;
    },
    listaFiltrada() {
      if (this.filtroTipo === '') return this.pokemonList;

      return this.pokemonList.filter((pokemon) => pokemon.type === this.filtroTipo);
    },
  },
}).mount('main');
