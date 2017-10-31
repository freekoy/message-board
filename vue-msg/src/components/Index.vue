<template>
  <div class="index">
      <v-header></v-header>
      <div class="v-main-wrapper">
          <v-main></v-main>
          <p class="redi"><a href="./#/add">留言</a><a href="./#/manage">管理</a></p>
      </div>
      <v-footer></v-footer>
  </div>
</template>

<script>
import header from '@/components/Header'
import main from '@/components/Main'
import footer from '@/components/Footer'

export default {
    components: {
        "v-header": header,
        "v-main": main,
        "v-footer": footer
    }
}
</script>

<style>
.index {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
.v-main-wrapper {
    flex: 1;
}
.v-main-wrapper .redi{
    text-align: center;
}
.v-main-wrapper .redi a{
    color: black;
    text-decoration: none;
    margin-left: 50px;
}
.v-main-wrapper .redi a:hover{
    color: orange;
}
</style>
