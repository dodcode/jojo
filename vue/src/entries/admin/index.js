// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import router from '../../router/admin/admin'
import BootstrapVue from 'bootstrap-vue'
import VueResource from 'vue-resource'
import Top from '../../components/admin/common/Top'
import Left from '../../components/admin/common/Left'
import Right from '../../components/admin/common/Right'
import Bottom from '../../components/admin/common/Bottom'

import 'bootstrap/scss/bootstrap.scss'
import 'font-awesome/css/font-awesome.min.css'
// import '../../assets/pike-admin/font-awesome/css/font-awesome.min.css'
import '../../assets/pike-admin/css/style.css'
import 'datatables.net-bs4/css/dataTables.bootstrap4.css'
// <link href="../src/assets/pike-admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
// <link href="../src/assets/pike-admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
// <link href="../src/assets/pike-admin/css/style.css" rel="stylesheet" type="text/css" />

// import '../../assets/pike-admin/js/jquery.min'
import '../../assets/pike-admin/js/detect'
import '../../assets/pike-admin/js/fastclick'

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
