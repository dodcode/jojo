import * as types from "../mutation-types";

const state = {
    articles: []
}

const getters = {
    getArticles: (state) => {
        return state.articles
    },
}

const actions = {
    append ({ commit, state }, articles){
        commit(types.LOAD_ARTICLES, articles)
    }
}

const mutations = {
    [types.LOAD_ARTICLES] (state, articles) {
        state.articles = articles
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}