<template>
  <div class="manage">
      <v-header :val="val"></v-header>
      <div class="v-main-wrapper">
          <v-main :showDel="showDel"></v-main>
      </div>
      <p class="redi"><a href="./">首页</a></p>
      <v-footer></v-footer>
  </div>
</template>

<script>
import header from '@/components/Header'
import main from '@/components/Main'
import footer from '@/components/Footer'

export default {
    data: function() {
        return {
            "val": "管理",
            "showDel": true
        }
    },
    components: {
        "v-header": header,
        "v-main": main,
        "v-footer": footer
    }
}
</script>

<style>
.manage {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
.manage .redi {
    text-align: center;
}
.manage .redi a {
    color: black;
    text-decoration: none
}
.manage .redi a:hover{
    color: orange;
}
.v-main-wrapper {
    flex: 1;
}
.v-main-wrapper .add{
    text-align: center;
}
.v-main-wrapper .add a{
    color: black;
    text-decoration: none;
}
.v-main-wrapper .add a:hover{
    color: orange;
}
</style>
