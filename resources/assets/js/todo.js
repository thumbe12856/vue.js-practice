import Vue from 'vue/dist/vue.js'

new Vue({
    el: '#todoList',
    data: {
        msg: 'Test 123',
        url: 'https://google.com',
        items: [
            {id: 1},
            {id: 2},
            {id: 3}
        ]

    }
});
