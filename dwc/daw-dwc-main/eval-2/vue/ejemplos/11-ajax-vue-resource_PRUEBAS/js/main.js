new Vue({
    el: 'main',
    mounted() {
        console.log('Instancia montada');
        this.cargarPersonas();
    },
    data: {
        numFilas: 0,
        personas : [],
        personas1 : [],
        personas2 : []
    },
    methods: {
        cargarPersonas() {
            this.$http.get('https://randomuser.me/api/?results=10')
                .then((respuesta) => {
                    //console.log(respuesta);
                    this.personas = respuesta.body.results;
                    for (i=0;i<this.personas.length/2;i++){
                        this.personas1.push(this.personas[i]);
                    }
                    for (i=this.personas.length/2;i<this.personas.length;i++){
                        this.personas2.push(this.personas[i]);
                    }
                    this.numFilas = this.personas.length/3;

                });
        },
    }
});