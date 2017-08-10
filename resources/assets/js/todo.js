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
        ]
    }
});

var todoList = new Vue({
    el: '#todoList',
    data: {
        'todoThings': [],
        'nowTodoThing': '',
        'editSwitch': [],
        'editTodoThing': '',
        'latestIndex': -1
    },
    methods: {
        addList: function(data) {
            this.$data.todoThings.push(data);
            this.$data.editSwitch.push(false);
            Vue.set(this.editSwitch, this.latestIndex, false);
        },
        removeList: function(index) {
            this.$data.todoThings.splice(index, 1);
            Vue.set(this.editSwitch, this.latestIndex, false);
        },
        editList: function(index, data) {
            Vue.set(this.editSwitch, index, false);
            this.$data.todoThings[index] = data;
        },
        showEditList: function(index, data) {
            Vue.set(this.editSwitch, this.latestIndex, false);
            Vue.set(this.editSwitch, index, true);
            this.latestIndex = index;
            this.$data.editTodoThing = data;
        }
    }
});