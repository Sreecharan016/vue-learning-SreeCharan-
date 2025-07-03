<template>
  <div>
    <button @click="showMessage = true">Click me</button>
    <p v-if="showMessage">{{ message }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'

defineProps({
  message: String
})

const showMessage = ref(false)
</script>
