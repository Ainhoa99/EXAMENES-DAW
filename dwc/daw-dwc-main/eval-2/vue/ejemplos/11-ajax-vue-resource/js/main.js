const app={
    mounted() {
        console.log("Instancia Montada");
        this.cargarPersonas();
    },
    data(){
       return{
        personas: []
       }
    },
    methods: {
        cargarPersonas() {
            this.$http.get('https://randomuser.me/api/?results=30')
                .then(function(respuesta) {
                    console.log(respuesta);
                    this.personas = respuesta.body.results;
                });
        }
    }
}
Vue.createApp(app).mount('main')
