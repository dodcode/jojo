// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import router from '../../router/front/auth'
// import BootstrapVue from 'bootstrap-vue'
import Top from '../../components/front/auth/Top'
import Auth from '../../components/front/auth/Auth'
// import Bottom from '../../components/front/common/Bottom'
import VueResource from 'vue-resource'

import '../../assets/paper-kit/css/bootstrap.min.css'
import '../../assets/paper-kit/css/paper-kit.css?v=2.1.0'
import '../../assets/paper-kit/css/demo.css'
import '../../assets/css/font-montserrat.css'
import '../../assets/pike-admin/font-awesome/css/font-awesome.min.css'
import '../../assets/paper-kit/css/nucleo-icons.css'

// import 'tether/dist/js/tether.min'
import '../../assets/paper-kit/js/jquery-3.2.1.js'
import '../../assets/paper-kit/js/jquery-ui-1.12.1.custom.min.js'
// import '../../assets/paper-kit/js/popper.js'
// import '../../assets/paper-kit/js/bootstrap.min.js'
// import '../../assets/paper-kit/js/bootstrap-switch.min.js'
// import '../../assets/paper-kit/js/paper-kit.js?v=2.0.1'

// Vue.use(BootstrapVue)
Vue.use(VueResource)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#auth',
    router,
    // template: '<App/>',
    components: {
        Top,
        Auth,
        // Bottom
    },
    data() {
        return {
            copyrightYear: new Date().getFullYear()
        }
    }
})
