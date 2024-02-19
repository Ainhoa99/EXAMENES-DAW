
<template>
  <div class="home">
    <div class="contador">
      {{contador}}
    </div>
    <div class="botones">
      <button @click="decrementar">-</button>
      <button @click="incrementar">+</button>
    </div>
    <hr>
    <div>
      EL numero mostrado es: {{parImpar}}
    </div>
  </div>
</template>

<script>
export default{
  data() {
    return{
      contador:1
    }
  },
  methods:{
    incrementar(){
      console.log("INCREMENTANDO")
      this.contador++;
    },
    decrementar(){
    this.contador--;
    }
  },
  computed:{
    parImpar(){
      if (this.contador % 2===0) 
        return "PAR"
      return "IMPAR"
    }
  }
}
</script>

<style>
.contador{
  font-size: 60px;
  margin: 20px
}
.botones button{
  font-size: 40px;
  margin: 10px
}
</style>