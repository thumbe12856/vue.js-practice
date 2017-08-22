<!DOCTYPE html>

<!-- For playing nice with Vue.js syntax at PhpStorm -->
@if (false)<html xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"> @endif

<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        <div id="test">
            <h1>@{{ msg }}</h1>
            <li v-for="item in items">
                @{{ item.id }}
            </li>
            <my-component></my-component>
            <a v-bind:href="url">@{{ url }}</a>

            <div id="dynamic-component">
                <input type="radio" id="one" value="fast" v-model="currentView" />
                <label for="one">fast</label>
                <br />
                <input type="radio" id="two" value="bus" v-model="currentView" />
                <label for="two">bus</label>
                <br />
                <input type="radio" id="three" value="business" v-model="currentView" />
                <label for="three">business</label>
                <component :is="currentView"></component>
            </div>

            <div id="money">
                <input id="NTD" v-model="NTD" v-on:input="inputUpdate"/>
                <p>@{{ nowDate() }}</p>
                <p>日幣: @{{japan}}</p>
            </div>

            <div id="githubRepoDiv">
                <h1>Thumbe Repositories:</h1>
                <template v-for="RVal in radioVal">
                    <input type="radio" v-bind:value="RVal" v-model="currentRadioVal">
                    @{{RVal}}
                </template>
                <ul>
                    <li v-for="(repo, index) in githubRepo">@{{ index+1 }}. @{{ repo }}</li>
                </ul>
            </div>
        </div>

        <script src="{{ asset('js/test.js') }}"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>-->
        <script>
            /*Vue.component('my-component', {
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
                        console.log('When data re-render happen, methods are running.');
                        return Date.now();
                    },
                    fetchRepos: function() {
                        this.$http.get('https://api.github.com/users/thumbe12856/repos').then((response) => {
                            response.body.forEach(function (element){
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
            });*/
        </script>
    </body>
</html>
