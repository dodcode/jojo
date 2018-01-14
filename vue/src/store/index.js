import Vue from 'vue'
import Vuex from 'vuex'

// import mutations from './mutations'
import actions from './actions'
// import getters from './getters'

import notifications from './modules/notifications'
import articles from './modules/articles'

Vue.use(Vuex)

// const state = {
//     notifications: [] // notifications
// }

export default new Vuex.Store({
    actions,
    modules: {
        notifications,
        articles
    },
    // state,
    // getters,
    // actions,
    // mutations
})