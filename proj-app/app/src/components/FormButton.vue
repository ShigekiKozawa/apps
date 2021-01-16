<template>
  <button class="button" @click.prevent="$emit('click')">
    <slot />
  </button>
</template>

<script>
  export default {
    name: 'FormButton',
  }
</script>

<style lang="scss" scoped>
  .button {
    padding: 5px 10px;
    min-width: 6em;
    font-size: 14px;
    color: #777;
    border: 1px solid #777;
    border-radius: 10px;
    background: #fff;
    transition: all .1s ease;
    &:focus {
      outline: 0;
    }
    &:hover {
      color: #fff;
      background: #777;
      box-shadow: 2px 2px 5px #777;
    }
    &:not(:last-of-type) {
      margin-right: 10px;
    }
    &.edit {
      color: #333;
      border-color: #333;
      background: #fff;
      &:hover {
        color: #fff;
        background: #333;
        box-shadow: 2px 2px 5px #333;
      }
    }
    &.next, &.confirm {
      color: #333;
      border-color: #333;
      background: #fff;
      &:hover {
        color: #fff;
        background: #333;
        box-shadow: 2px 2px 5px #333;
      }
    }
    &.complete {
      color: #333;
      border-color: #333;
      background: #fff;
      &:hover {
        color: #fff;
        background: #333;
        box-shadow: 2px 2px 5px #333;
      }
    }
    &.completed {
      margin: 20px 0;
      padding: 10px 20px;
      color: #333;
      border-color: #333;
      background: #fff;
      &:hover {
        color: #fff;
        background: #333;
        box-shadow: 2px 2px 5px #333;
      }
    }
  }
</style>