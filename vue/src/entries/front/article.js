// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
// import BootstrapVue from 'bootstrap-vue'
import Top from '../../components/front/common/Top'
// import Editor from '../../components/common/Editor'
import MainContent from '../../components/front/article/MainContent'
import Bottom from '../../components/front/common/Bottom'
import store from '../../store'

import '../../assets/paper-kit/js/jquery-3.2.1.js'
import '../../assets/paper-kit/js/jquery-ui-1.12.1.custom.min.js'

import '../../assets/paper-kit/css/bootstrap.min.css'
import '../../assets/paper-kit/css/paper-kit.css?v=2.1.0'
import '../../assets/paper-kit/css/demo.css'
import '../../assets/css/font-montserrat.css'
import '../../assets/pike-admin/font-awesome/css/font-awesome.min.css'

// Vue.use(BootstrapVue)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#article',
    store,
    // template: '<App/>',
    components: {
        Top,
        // Editor,
        MainContent,
        Bottom
    }
})
