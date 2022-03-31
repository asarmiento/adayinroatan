import Vue from 'vue'
import Vuex from 'vuex'
import schedule from './modules/Schedules'
Vue.use(Vuex);
 const store = new Vuex.Store({
      namespaced: true,
      modules: {
        schedule
      }
});

export default store;
