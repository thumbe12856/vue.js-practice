import Vue from 'vue/dist/vue.js'

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