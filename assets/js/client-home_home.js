import Logo    from './components/Logo.vue';
import Message from './components/Message.vue';
import Counter from './components/Counter.vue';

import Vue     from 'vue';

function createApp() {
    return new Vue({
        components: {
            Counter,
            Message,
            Logo
        },
    });
}

createApp().$mount('#app');