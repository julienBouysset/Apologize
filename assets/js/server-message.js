import { createApp } from './render-message'
renderVueComponentToString(createApp(), (err, res) => {
    print(res);
});