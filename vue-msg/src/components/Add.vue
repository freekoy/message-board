<template>
  <div class="add">
      <v-header :val="val"></v-header>
      <div class="v-editor-wrapper">
          <v-editor></v-editor>
      </div>
      <v-footer></v-footer>
  </div>
</template>

<script>
import header from '@/components/Header'
import editor from '@/components/Editor'
import footer from '@/components/Footer'

export default {
    data: function() {
        return {
            "val": "留言",
        }
    },
    components: {
        "v-header": header,
        "v-editor": editor,
        "v-footer": footer
    }
}
</script>

<style>
.add {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
.v-editor-wrapper {
    flex: 1;
}
.v-editor-wrapper .add{
    text-align: center;
}
.v-editor-wrapper .add a{
    color: black;
    text-decoration: none;
}
.v-editor-wrapper .add a:hover{
    color: orange;
}
</style>
