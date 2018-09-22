import App from './components/Message.vue';
import Vue from 'vue';

function createApp() {
    return new Vue({
        render: h => h(App)
    });
}

renderVueComponentToString(createApp(), (err, res) => {
    print(res);
});