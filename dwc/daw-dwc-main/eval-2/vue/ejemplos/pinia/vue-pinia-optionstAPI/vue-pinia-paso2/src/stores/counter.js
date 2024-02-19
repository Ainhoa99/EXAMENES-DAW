import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter', {
  state: () => ({ 
    contador:5
  }),
  getters: {
    parImpar(){
      if (this.contador % 2===0) 
        return "PAR"
      return "IMPAR"
    }
  },
  actions: {
    incrementar() {
      this.contador++
    },
    decrementar(){
      this.contador--
    }

  },
})
