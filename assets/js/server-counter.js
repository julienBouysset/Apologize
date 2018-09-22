import Counter from './components/Counter.vue';
import Vue from 'vue';

function createApp() {
    return new Vue({
        render: h => h(Counter)
    });
}

renderVueComponentToString(createApp(), (err, res) => {
    print(res);
});