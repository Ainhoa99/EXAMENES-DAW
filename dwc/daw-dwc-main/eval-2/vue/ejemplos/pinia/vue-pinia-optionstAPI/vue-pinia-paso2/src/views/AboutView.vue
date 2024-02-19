<template>
  <div class="about">
    <h1>Acerca de</h1>
    <button class="bt1">
      {{contador}}
    </button>
  </div>
</template>

<script>
  import { mapState } from 'pinia'
  import {useCounterStore} from '@/stores/counter'
  export default{
    computed:{
      ...mapState(useCounterStore, ['contador'])
    }
  }
</script>

<style>
  .bt1{
    font-size: 50px;
  }
</style>