// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
// import BootstrapVue from 'bootstrap-vue'
import Top from '../../components/front/common/Top'
import MainContent from '../../components/front/index/MainContent'
import Bottom from '../../components/front/common/Bottom'
import store from '../../store'

import 'jquery'
// import '../../assets/paper-kit/js/jquery-3.2.1.js'
import '../../assets/paper-kit/js/jquery-ui-1.12.1.custom.min.js'

import '../../assets/paper-kit/css/bootstrap.min.css'
import '../../assets/paper-kit/css/paper-kit.css?v=2.1.0'
// import '../../assets/paper-kit/css/demo.css'
import '../../assets/css/font-montserrat.css'
import '../../assets/pike-admin/font-awesome/css/font-awesome.min.css'


Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#article',
    store,
    components: {
        Top,
        MainContent,
        Bottom
    }
})
