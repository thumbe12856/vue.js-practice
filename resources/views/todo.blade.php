<!DOCTYPE html>

<!-- For playing nice with Vue.js syntax at PhpStorm -->
@if (false)<html xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"> @endif

<html>
    <head>
        <meta charset="UTF-8">
        <title>Todo List</title>
    </head>
    <body>
        <div id="todoList">
            <h1>@{{ msg }}</h1>
            <li v-for="item in items">
                @{{ item.id }}
            </li>
            <my-component></my-component>
            <a v-bind:href="url">@{{ url }}</a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js"></script>
        <!--<script src="{{ asset('js/todo.js') }}"></script>-->
        <script>
            Vue.component('my-component', {
                template: '<h1>A custom component!</h1>'
            });

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
        </script>
    </body>
</html>
