// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import router from '../../router/admin'
import BootstrapVue from 'bootstrap-vue'
import VueResource from 'vue-resource'
import Top from '../../components/admin/Top'
import Left from '../../components/admin/Left'
import Right from '../../components/admin/Right'
import Bottom from '../../components/admin/Bottom'


Vue.use(BootstrapVue)
Vue.use(VueResource)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#admin',
    router,
    // template: '<App/>',
    components: { Top, Left, Right, Bottom }
})
