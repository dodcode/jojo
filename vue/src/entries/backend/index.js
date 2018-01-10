// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import router from '../../router/backend/index'
// import BootstrapVue from 'bootstrap-vue'
import Top from '../../components/backend/common/Top'
import Left from '../../components/backend/common/Left'
import Right from '../../components/backend/common/Right'
import Bottom from '../../components/backend/common/Bottom'
import store from '../../store'

import 'bootstrap/scss/bootstrap.scss'
import 'font-awesome/css/font-awesome.min.css'
import '../../assets/pike-admin/css/style.css'
import 'datatables.net-bs4/css/dataTables.bootstrap4.css'

import 'jquery'
import 'bootstrap'
import '../../assets/pike-admin/js/detect'
import '../../assets/pike-admin/js/fastclick'

// Vue.use(BootstrapVue)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#admin',
    store,
    router,
    // template: '<App/>',
    components: { Top, Left, Right, Bottom }
})
