export const getters = {
  isAuthenticated(state) {
    return state.auth.loggedIn
  },

  loggedInUser(state) {
    return state.auth.user
  },
}

export const state = () => ({
  counter: 0,
})

export const mutations = {
  UpdateUser (state,user) {
     state.auth.user = user;
  }
}


