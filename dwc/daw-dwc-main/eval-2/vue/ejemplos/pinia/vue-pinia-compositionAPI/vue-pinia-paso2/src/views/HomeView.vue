
<template>
  <div class="home">
    <div class="contador">
      {{store.contador}}
    </div>
    <div class="botones">
      <button @click="store.decrementar">-</button>
      <button @click="store.incrementar">+</button>
    </div>
    <hr>
    <div>
      EL numero mostrado es: {{store.parImpar}}
    </div>
  </div>
</template>

<script setup>

import { useCounterStore } from '@/stores/counter'

const store = useCounterStore()

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