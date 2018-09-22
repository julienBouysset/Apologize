import { createApp } from './render-counter'
renderVueComponentToString(createApp(), (err, res) => {
    print(res);
});