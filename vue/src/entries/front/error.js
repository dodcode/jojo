// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Top from '../../components/front/common/Top'
import Bottom from '../../components/front/common/Bottom'
import store from '../../store'

import '../../assets/paper-kit/css/bootstrap.min.css'
import '../../assets/paper-kit/css/paper-kit.css?v=2.1.0'
import '../../assets/css/font-montserrat.css'
import '../../assets/pike-admin/font-awesome/css/font-awesome.min.css'

import 'jquery'


Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#error',
    store,
    components: {
        Top,
        Bottom
    }
})
