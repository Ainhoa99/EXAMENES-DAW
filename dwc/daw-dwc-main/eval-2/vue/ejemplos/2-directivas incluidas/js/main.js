//Vuejs 2
/* const vm = new Vue ({
	el: 'main',
	data: {
		conectado: true, 
		edad : 35
	}
}); */

//Vuejs 3
Vue.createApp({
	//el: 'main',
	data(){
		return{
			conectado: true, 
			edad : 35
		}
	} 
}).mount('main');