import VueResource from 'vue-resource/dist/vue-resource'
import Vue from 'vue'
Vue.use(require('vue-resource'));

Vue.component('my-component', {
    template: '<h1>A custom component!</h1>'
});

var Bike = {
    template: '<p>腳踏車</p>'
};

var myVue = new Vue({
    el: '#test',
    data: {
        msg: 'Test 123',
        url: 'https://google.com',
        items: [
            {id: 1},
            {id: 2},
            {id: 3}
        ],
        currentView: Bike,
        NTD: 0,
        githubRepo: [],
        radioVal: ['No.1', 'No.2'],
        currentRadioVal: ''
    },
    created: function() {
        this.fetchRepos();
    },
    components: {
        fast: {template: '<h3>快車</h3>'},
        bus: {template: '<h2>公車</h2>'},
        business: {template: '<h1>商務艙</h1>'}
    },
    computed: {
        japan: function() {
            return this.NTD * 0.2713;
        }
    },
    watch: {
        items: {
            handler: function(val, oldVal) {
                console.log('item change: ' , val , oldVal);
            },
            deep: true
        }
    },
    methods: {
        nowDate: function() {
            return Date.now();
        },
        fetchRepos: function() {
            this.$http.get('https://api.github.com/users/thumbe12856/repos').then((response) => {
                console.log(response);
                response.data.forEach(function (element){
                    myVue.githubRepo.push(element.full_name);
                });
            }, (response) => {
                console.log('fail', response);
            });
        },
        inputUpdate: function() {
            console.log('update');
        }
    }
});