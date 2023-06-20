import { createStore } from 'vuex';

// Define the store state interface
interface RootState {
  user: User | null;
}

// Define the user interface
interface User {
  name: string;
  email: string;
}

// Create the store
const store =  createStore<RootState>({
  state: {
    user: null,
  },
  mutations: {
    setUser(state, user: User) {
      state.user = user;
    },
  },
  actions: {
    setUser(context, user: User) {
      context.commit('setUser', user);
    },
  },
  getters: {
    getUser(state) {
      return state.user;
    },
  },
});

export default store;
