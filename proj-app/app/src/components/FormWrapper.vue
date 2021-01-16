<template>
  <div class="wrapper">
    <slot />
  </div>
</template>

<script>
  export default {
    name: 'FormWrapper',
  }
</script>

<style lang="scss" scoped=""> 
  .wrapper {
    margin: 0 auto;
    margin-bottom: 40px;
    max-width: 760px;
    width: 100%;
    text-align: left;
    border: 1px solid #eee;
    border-radius: 10px;
    background: #fff;
  }
</style>