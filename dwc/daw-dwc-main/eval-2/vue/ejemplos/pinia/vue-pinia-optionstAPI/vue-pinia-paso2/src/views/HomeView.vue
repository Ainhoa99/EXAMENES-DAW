
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
import { mapState, mapActions } from 'pinia'
import {useCounterStore} from '@/stores/counter'
export default{
  computed:{
    ...mapState(useCounterStore, ['contador','parImpar'])
  },
  methods:{
    ...mapActions(useCounterStore,['incrementar', 'decrementar'])
  },
}
</script>

<style>
.contador{
  font-size: 60px;
  margin: 20px
}
.botones button{
  font-size: 40px;
  margin: 20px
}
</style>