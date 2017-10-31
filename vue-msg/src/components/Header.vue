<template>
  <div class="header">
      <h1>{{val}}</h1>
  </div>
</template>

<script>
export default {
    props: {
        "val": {
            type: String,
            default: "留言板"
        }
    }
}
</script>

<style>
.header {
    display: flex;
    justify-content: center;
}
</style>
