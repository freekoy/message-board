<template>
  <div class="main">
      <ul>
          <li v-for="(item,index) in comm">
              <p>{{item.username}} {{item.pubtime | time}} <button v-show="showDel" @click="del(index)">x</button></p>
              <p>{{item.content}}</p>
          </li>
      </ul>
  </div>
</template>

<script>

const ERR_OK = 0

export default {
    props: {
        showDel: {
            type: Boolean,
            default: false
        }
    },
    data: function() {
      return {
          comm: []
      }
    },
    created() {
        this.$http.get('/api/data')
        .then((response) => {
            response = response.data
            if(response.errno == ERR_OK) {
                // console.log(response);
                this.comm = response.data;
            }
            })
        .catch(function(err) {
            console.log(err)
            })
    },
    methods: {
        del: function(index) {
            let id = '/api/del/' + this.comm[index]._id
            this.$delete(this.comm,index)
            console.log(this.comm,id)
            this.$http.get(id)
            .then((response) => {
                console.log(response)
            })
            .catch(function(err) {
                console.log(err)
            })
        }
    },
}
</script>

<style>
.main ul li {
    list-style: none;
    border: 1px solid;
}
.main ul li p:nth-child(1) {
    font-weight: 700;
}
.main ul li p button {
    position: absolute;
    right: 0px;
    margin-right: 20px;
}
</style>

