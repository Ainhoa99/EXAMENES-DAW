<template>
  <div class="about">
    <h1>Acerca de</h1>
    <button class="bt1" @click="store.incrementar">
      {{store.contador}}
    </button>
  </div>
</template>

<script setup>
  import { useCounterStore } from '@/stores/counter'

  const store = useCounterStore()
</script>

<style>
  .bt1{
    font-size: 50px;
  }
</style>