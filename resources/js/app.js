import './bootstrap';
import 'flowbite';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js';
import { Ziggy } from './ziggy.js';
import DashboardLayout from "./Layouts/DashboardLayout.vue";
import GustLayout from './Layouts/GustLayout.vue';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`];

        if (name.includes('Dashboard'))
            page.default.layout = page.default.layout || DashboardLayout;
        else if (name.includes('Auth'))
            page.default.layout = page.default.layout || GustLayout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el)
    },
}).then(() => console.log('inertia app created'));
