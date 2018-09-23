import Logo from './components/Logo.vue';
import Vue from 'vue';



function createApp() {
    return new Vue({
        message: message,
        render: h => h(Logo)
    });
}

renderVueComponentToString(createApp(), (err, res) => {
    print(message);
});
