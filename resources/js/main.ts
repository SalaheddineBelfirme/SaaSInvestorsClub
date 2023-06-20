import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import axios from "axios"


import './assets/index.css'
import 'flowbite';

axios.defaults.withCredentials = true
// axios.defaults.baseURL ="http://localhost:8000"
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('authToken');

createApp(App).use(store).use(router).mount('#app')




// console.log('hugo')
