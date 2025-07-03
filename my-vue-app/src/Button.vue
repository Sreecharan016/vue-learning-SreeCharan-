<template>
  <div>
    <button>{{btnText}}</button>
  </div>
</template>

<script>
export default {
  props:['btnText']

}
</script>

<style>
button{
  background-color: aqua;
}
</style>