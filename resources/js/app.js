import './bootstrap';
import '../css/app.css';

import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue3';
import {InertiaProgress} from '@inertiajs/progress';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from '../../vendor/tightenco/ziggy/dist/vue.m';



import DataComponent from '@/Components/FlexibleContent/DataComponent.vue'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, app, props, plugin}) {
        const innertiaApp = createApp({render: () => h(app, props)})
            .use(plugin)
            .mixin({methods: {route}})



        innertiaApp.component('DataComponent', DataComponent)
        return innertiaApp.mount(el);

        // return createApp({ render: () => h(app, props) })
        //     .use(plugin)
        //     .use(ZiggyVue, Ziggy)
        //     .mount(el);
    },
});

InertiaProgress.init({color: '#4B5563'});
