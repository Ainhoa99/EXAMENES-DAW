// Vue.prototype.$http = axios;  si quiero usar la libreria axios pero con la sintaxis de vue-resource

const vm = {
    mounted() {
        this.cargarPersonas();
    },
    data(){
        return{
            personas: []
        }
    },
    methods: {
        cargarPersonas() {
            /*this.$http.get('https://randomuser.me/api/?results=500')
                .then((respuesta) => {
                    this.personas = respuesta.data.results;
                });*/
            axios.get('https://randomuser.me/api/?results=50')
                .then((respuesta) => {
                    console.log(respuesta);
                    this.personas = respuesta.data.results; //la respuesta con vue-resource venia en body, AHORA VIENE EN data
                });
        }
    }
};
Vue.createApp(vm).mount('main')
