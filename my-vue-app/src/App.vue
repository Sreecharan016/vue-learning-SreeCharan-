<script setup>

import Button from './Button.vue'
import MessageButton from './MessageButton.vue'


</script>

<template>
  <div>
   <Button btn-text="Hi From Parent"/>
   <h1>Parent Component</h1>
    <MessageButton message="Hello from Parent!" />
  </div>
 
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
