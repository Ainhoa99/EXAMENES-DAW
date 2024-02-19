const app=Vue.createApp({
    mounted() {
        axios.get('https://jsonplaceholder.typicode.com/todos')
            .then((respuesta) => {
                this.tareasAjax = respuesta.data;
            });
    },
    data()  {
        return {
            tareasAjax: [],
            tareasLocales: [
                { title: 'Hacer los deberes'},
                { title: 'Aprender Vue'},
                { title: 'Hacer los ejercicios'}
            ]
        }
    }
})

//En este componente usamos los datos que están en la instancia principal, por eso necesita props
app.component('Mistareas', {
    props: ['tareas'],
    template: //html 
    `<ul><li v-for="tarea in tareas">{{ tarea.title }}</li></ul>`,
    
});


/*Este componente es totalmente independiente, usa los datos de su propio data, 
eso si hay que recogerlos datos como si fuese un return de la funcion data()
*/
app.component('Otrastareas', {
    template: //html
    `<div>
            <ul><li v-for="persona in personas">{{ persona.name.first}}</li></ul>
            <img v-for="persona in personas" v-bind:src='persona.picture.thumbnail'>
    </div>`,
    mounted() {
        axios.get('https://randomuser.me/api/?results=5')
                .then((respuesta) => {
                    console.log(respuesta);
                    this.personas = respuesta.data.results; //la respuesta con vue-resource venia en body, AHORA VIENE EN data
                });
    },
    data() {
       return {
        personas: []
        } 
    }
});

app.mount('main')