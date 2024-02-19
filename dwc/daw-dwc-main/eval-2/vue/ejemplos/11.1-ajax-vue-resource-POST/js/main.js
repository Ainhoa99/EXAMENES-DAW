var app = new Vue({
  el: '#vueapp',
  data: {
    nombre: '',
    telefono: '',
    regs: {
        nombre:'',
        telefono:''
        }
    },
  methods: {
 
    enviar: function() {
        this.$http.post('data.php',{
                        nombre: this.nombre,
                        telefono: this.telefono
                        }).then(function(response){
                            this.regs = response.body;
                            this.nombre="";
                            this.telefono="";
                            console.log(this.regs.nombre);
                            });
        }
 
    }
  
});

