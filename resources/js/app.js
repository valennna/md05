require('./bootstrap');

import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./components/App";
import Home from "./components/Home";
import About from "./components/About";

const router = createRouter({
    history: createWebHistory(),
    routes: [

        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },

    ]
})

const app = new createApp({
    el: '#app',
    components: { App },
});
app.use(router);
app.mount("#app");


// import { createApp } from "vue";
// Vue.component('app', require('./components/App').default);

// const app = new createApp({
//     el: '#app',
// });