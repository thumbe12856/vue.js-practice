import Vue from 'vue/dist/vue.js'

Vue.component('my-component', {
    template: '<h1>A custom component!</h1>'
});

new Vue({
    el: '#test',
    data: {
        msg: 'Test 123',
        url: 'https://google.com',
        items: [
            {id: 1},
            {id: 2},
            {id: 3}
        ],
        currentView: 'home'
    },
    components: {
        home: {
            template: '<p>Welcome home!</p>'
        }
    }

});