//En Vue 2 esto sería un filtro declarado de manera global
//En Vue 3 han sido eliminados, en su lugar se recomienda usar propiedades computadas
Vue.filter('alReves', function (valor) {
  return valor.split('').reverse().join('');
});
// Vue.filter('alReves',(valor) => valor.split('').reverse().join(''));

new Vue({
  el: 'main',
  data: {
    busqueda: '',
    minimo: 5,
    juegos: [
      {
        titulo: 'Battlefield',
        genero: 'FPS',
        puntuacion: 9,
      },
      {
        titulo: 'Civilization',
        genero: 'Estrategia',
        puntuacion: 8,
      },
      {
        titulo: 'Resident Evil',
        genero: 'Survival Horror',
        puntuacion: 7,
      },
    ],
  },
  computed: {
    mejoresJuegos() {
      return this.juegos.filter((juego) => juego.puntuacion >= this.minimo);
    },
    buscarJuego() {
      return this.juegos.filter((juego) => juego.titulo.includes(this.busqueda));
    },
  },
});
