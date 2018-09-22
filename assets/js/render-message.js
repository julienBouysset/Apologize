import App from './components/Message.vue';
import Vue from 'vue';

export function createApp() {
    return new Vue({
        render: h => h(App)
    });
}