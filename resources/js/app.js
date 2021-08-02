require('./bootstrap');

import Vue from 'vue';
import App from './vue/app';
import VueAxios from 'vue-axios';
import axios from 'axios';

import { library } from '@fortawesome/fontawesome-svg-core';
import { faThumbsDown,faThumbsUp,faFolderPlus,faTrash } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faThumbsDown,faThumbsUp,faFolderPlus,faTrash);

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);


Vue.component('font-awesome-icon', FontAwesomeIcon);


Vue.use(VueAxios, axios);

const app = new Vue(App).$mount('#app');