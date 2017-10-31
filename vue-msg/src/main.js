// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import axios from 'axios'
import Qs from 'qs'

Vue.prototype.$http = axios

Vue.config.productionTip = false

Vue.filter('time',
  function (value) {
    let date = new Date(value),
    Y = date.getFullYear(),
      m = date.getMonth() + 1,
      d = date.getDate(),
      H = date.getHours(),
      i = date.getMinutes(),
      s = date.getSeconds();
    if (m < 10) {
      m = '0' + m;
    }
    if (d < 10) {
      d = '0' + d;
    }
    if (H < 10) {
      H = '0' + H;
    }
    if (i < 10) {
      i = '0' + i;
    }
    if (s < 10) {
      s = '0' + s;
    }
    var t = Y + '-' + m + '-' + d;
    return t;
  })

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
