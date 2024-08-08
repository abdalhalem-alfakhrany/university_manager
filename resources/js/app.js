import './bootstrap';
import 'flowbite';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Dashboard from "./Layouts/Dashboard.vue";

createInertiaApp({
    // id: 'university_manager',
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Dashboard;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
}).then(()=>console.log('inertia app created'));
