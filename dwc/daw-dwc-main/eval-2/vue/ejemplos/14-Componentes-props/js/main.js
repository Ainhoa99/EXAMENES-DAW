const app=Vue.createApp({
    data(){
        return{
            autor: '2DW3 - fpTxurdinaga'
        }
    }

})


app.component('autor', {
    props: ['nombre', 'edad'],
    mounted() {
        // Las props son accesibles desde this (proxy)
        //console.log(this.nombre);
        console.log(typeof this.edad);
    },
    data(){
        return{
            nombre2:'jeje'
        }
    },
    template: //html
    `<div><h1> {{ nombre }} --- {{nombre}}</h1><button @click="cambiarProp">Cambiar Prop</button></div>`,
    methods: {
        cambiarProp() {
            this.nombre = this.nombre.toUpperCase();
        }
    }
});

app.mount('main')