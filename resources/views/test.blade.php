<!DOCTYPE html>

<!-- For playing nice with Vue.js syntax at PhpStorm -->
@if (false)<html xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"> @endif

<html>
    <head>
        <meta charset="UTF-8">
        <title>Todo List</title>
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
        </div>

        <!--<script src="{{ asset('js/test.js') }}"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js"></script>
        <script>
            Vue.component('my-component', {
                template: '<h1>A custom component!</h1>'
            });

            var Bike = {
                template: '<div>腳踏車</div>'
            };

            var vm = new Vue({
                el: '#test',
                data: {
                    msg: 'Test 123',
                    url: 'https://google.com',
                    items: [
                        {id: 1},
                        {id: 2},
                        {id: 3}
                    ],
                    currentView: Bike
                },
                components: {
                    fast: {template: '<div>快車</div>'},
                    bus: {template: '<div>公車</div>'},
                    business: {template: '<div>商務艙</div>'}
                }

            });
        </script>
    </body>
</html>
