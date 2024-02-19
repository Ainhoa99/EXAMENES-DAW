// Vanilla JavaScript
// const input = document.querySelector('input');
// const h1 = document.querySelector('h1');
// input.addEventListener('keyup', function () {
//   h1.innerHTML = input.value;
// });

// input.addEventListener('keyup', () => (h1.innerHTML = input.value));

// Vue.js -->Conseguimos la misma reactividad que antes pero ahora utilizamos vue

//Vuejs 2
// new Vue({
//   //creamos una nueva instancia (objeto) vue
//   el: 'main', //en este punto deimos con que parte del html interactuamos
//   data: {
//     //aqui especificamos el modelo, es decir la fuente de datos
//     mensaje: 'Hola mundo!',
//   },
// });

//Vuejs 3
// const { createApp } = Vue;

// createApp({
//   data() {
//     return {
//       mensaje: 'Hola mundo!',
//     };
//   },
// }).mount('main');

// otra forma
const vueApp = {
  //el: 'main', //en Vue 3 no es necesario porque ya le decimos luego donde se monta
  data() {
    //ahora data no es un objeto. Es una funcion
    return {
      //aqui especificamos el modelo, es decir la fuente de datos
      mensaje: 'Hola mundo!',
    };
  },
};
Vue.createApp(vueApp).mount('main');
