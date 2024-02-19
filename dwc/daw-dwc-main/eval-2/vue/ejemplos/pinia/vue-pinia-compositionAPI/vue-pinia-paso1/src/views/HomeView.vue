<template>
  <div class="home">
    <div class="contador">
      {{ contador }}
    </div>
    <div class="botones">
      <button @click="decrementar">-</button>
      <button @click="incrementar">+</button>
    </div>
    <hr />
    <div>EL numero mostrado es: {{ parImpar }}</div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const contador = ref(0);

const incrementar = () => {
  contador.value++;
};
const decrementar = () => {
  contador.value--;
};

const parImpar = computed(() => {
  if (contador.value % 2 === 0) return 'PAR';
  return 'IMPAR';
});
</script>

<style>
.contador {
  font-size: 60px;
  margin: 20px;
}
.botones button {
  font-size: 40px;
  margin: 10px;
}
</style>
