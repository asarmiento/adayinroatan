/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import { createApp } from 'vue';
require('./bootstrap');

//window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/Login.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('exampleComponent', require('./components/Login.vue'));
import Login from './components/Login.vue';
import listsUsers from './components/listsUsers.vue';
import editUser from './components/editUser.vue';



import createConfiguration from './components/createConfiguration.vue';
import editConfiguration from './components/editConfiguration.vue';
import listsConfigurations from './components/listsConfigurations.vue';
import viewConfigurations from './components/viewConfigurations.vue';
import viewContacts from './components/contacts.vue';
import viewSchedule from './components/schedule.vue';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//import store from "./store/index"
createApp({
    components:{
        Login,
        listsUsers,
        editUser,
        createConfiguration,
        editConfiguration,
        viewConfigurations,
        listsConfigurations,
      viewContacts,
      viewSchedule
    },
         //   store: store,
              data() {
                  return {
                      count: 0
                  }
              }
          }).mount('#app')
