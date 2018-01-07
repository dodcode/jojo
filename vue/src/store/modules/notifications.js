import * as types from "../mutation-types";

const state = {
    notifications: [{
        type: 'warning',
        message: 'vuex is ok!'
    }]
}

const getters = {
    getNotifications: (state) => {
        return state.notifications;
    }
}

const actions = {
    remove ({ commit, state }, index) {
        commit(types.CLOSE_NOTIFICATION, index)
    },
    send ({ commit, state }, notification){
        commit(types.SEND_NOTIFICATION, notification)
    }
}

const mutations = {
    [types.SEND_NOTIFICATION] (state, {type, message}) {
        state.notifications.push({
            type: type,
            message: message
        })
    },
    [types.CLOSE_NOTIFICATION] (state, index) {
        state.notifications.splice(index, 1)
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}