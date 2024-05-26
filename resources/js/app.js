import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';



createInertiaApp({
  title: title => title ? `${title} | cPanel | ${window.config.app_name}` : `cPanel | ${window.config.app_name}`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    // app.config.globalProperties.$route = route;
    app.use(plugin);
    app.component('v-select', vSelect);
    app.mount(el);
  },
})