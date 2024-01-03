/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
// import { useUserStore } from "./stores/auth";
import { createPinia } from 'pinia';
import router  from './router';
import App from './App.vue'
import VueAxios from 'vue-axios'
import axios from 'axios'
// import VueRouter from 'vue-router';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
createApp(App).use(router,VueAxios, axios).use(createPinia()).mount('#app');

const token =  localStorage.getItem('token');
axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
axios.defaults.baseURL = 'http://localhost:8000/';