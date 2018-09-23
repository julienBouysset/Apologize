import Logo from './components/Logo.vue';
import Vue  from 'vue';

function createApp() {
    return new Vue({
        components: {
            Logo
        },
    });
}

createApp().$mount('#app');