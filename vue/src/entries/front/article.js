// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
// import BootstrapVue from 'bootstrap-vue'
import Top from '../../components/front/common/Top'
import Editor from '../../components/common/Editor'
import Bottom from '../../components/front/common/Bottom'
import VueResource from 'vue-resource'

import 'tether/dist/js/tether.min'

// Vue.use(BootstrapVue)
Vue.use(VueResource)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#auth',
    // template: '<App/>',
    components: {
        Top,
        Editor,
        Bottom
    }
})
