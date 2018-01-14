import * as types from "../mutation-types";

const state = {
    notifications: []
}

const getters = {
    getNotifications: (state) => {
        return state.notifications
    },
    lastNotification: (state) => {
        return state.notifications[state.notifications.length - 1]
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
    [types.SEND_NOTIFICATION] (state, {type, title, message}) {
        state.notifications.push({
            type: type,
            title: title,
            message: message
        })
    },
    [types.CLOSE_NOTIFICATION] (state, index) {
        state.notifications.splice(index, 1)
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}