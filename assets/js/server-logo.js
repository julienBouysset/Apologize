import Logo from './components/Logo.vue';
import Vue from 'vue';

function createApp() {
    return new Vue({
        render: h => h(
            Logo, {
                props: {
                    message: message
                },
            })
    });
}

renderVueComponentToString(createApp(), (err, res) => {
    print(res);
});
