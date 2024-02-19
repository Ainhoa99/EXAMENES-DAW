// Vue.prototype.$http = axios;  si quiero usar la libreria axios pero con la sintaxis de vue-resource

const vm = {
    mounted() {
        this.cargarPersonas();
    },
    data() {
        return{
            personas: [],
        sexo: ''
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
    },
    computed:{
        personasHM() {
            return this.personas.filter((sdg) => sdg.name.title == this.sexo);
        }
    }
};
Vue.createApp(vm).mount('main')
