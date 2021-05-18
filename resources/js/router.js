import vueRouter from 'vue-router';
import Vue from 'vue';
Vue.use(vueRouter);

import PriceComponent from "./components/views/PriceComponent";
import ContactComponent from "./components/views/ContactComponent";
import PostComponent from "./components/views/PostComponent";
import IndexComponent from "./components/IndexComponent";
import CategoryComponent from "./components/views/CategoryComponent";

const routes = [
    {
        path: '/',
        name: 'index',
        component: IndexComponent,
        meta: { title: 'Электрик в Невинномысске' }
    },
    {
        path: '/price',
        name: 'price',
        component: PriceComponent,
        meta: { title: 'Прайс на услуги электрика в Невинномысске' }
    },
    {
        path: '/contact',
        name: 'contact',
        component: ContactComponent,
        meta: { title: 'Контакты электрика в Невинномысске' }
    },
    {
        path: '/post/:id',
        name: 'post',
        component: PostComponent,
        meta: { title: '.' },
    },
    {
        path: '/category/:id',
        name: 'category',
        component: CategoryComponent,
        meta: { title: '.' }
    }
];


export default new vueRouter({
    mode:'history',
    routes
});
