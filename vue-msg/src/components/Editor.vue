<template>
  <div class="editor">
      <form @submit.prevent="submit">
        <p>用户名: <input type="text" v-model="add.username"></p>
        <textarea v-model="add.content" placeholder="请输入留言内容"></textarea>
        <p><input type="submit"></p>
      </form>
  </div>
</template>

<script>
export default {
    data: function() {
        return {
            "add": {
                username: '',
                content: ''
            }
        }
    },
    methods: {
        submit: function() {
            let self = this
            var params = new URLSearchParams()
            params.append('username', this.add.username)
            params.append('content', this.add.content)
            this.$http.post('/api/data', params)
            .then(function(response) {
                console.log(response)
                if(response.data.ok === '200') {
                    self.$router.push({name: 'Index'})
                }
            })
            .catch(function(error) {
                console.log(error)
            })
            console.log(this.add)
        }
    }
}
</script>

<style>
.editor {
    text-align:center;
}
.editor p {
    margin-top: 20px;
}
.editor textarea {
    width: 80%;
    height: 300px;
    margin-top: 20px;
}
</style>
