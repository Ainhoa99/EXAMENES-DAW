const app=Vue.createApp({})

app.component('Saludo',{
    data(){ //en un componente el elemento data ees una fiuncion que devuelve los datos que queramos
        return {
            saludo:'DATA DEL COMPONENTE' 
        }
    }, 
    template: //html
    `   
        <!--para que me pinte las et html, instalo es6-string-html, y luego tengo que indicar junto a template html-->
        <!--como tengo más de un elemento los tengo que envolver en un div-->
        <div>
            <h1>Saludo de forma statica dentro Componente 'Saludo' </h1>
            <h3>{{ saludo }}</h3>
        </div>
    `,
    
})

app.component('Contador',{
    data(){
        return{
            numero:0
        }
    },
    template: //html
    `
        <div>
            <h3>{{numero}}</h3>
            <button @click="numero++">+</button>
        </div>

    `
})

app.mount('#app')
