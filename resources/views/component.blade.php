<!DOCTYPE html>

<!-- For playing nice with Vue.js syntax at PhpStorm -->
@if (false)<html xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"> @endif

<html>
    <head>
        <meta charset="UTF-8">
        <title>Component</title>
    </head>
    <body>
        <div id="Component">
            <my-component v-bind:parent-msg="msg"></my-component>
        </div>

        <!--<script src="{{ asset('js/component.js') }}"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
        <script>
            Vue.component('my-component', {
                props: {
                    parentMsg: String
                },
                template: '<div><h1>@{{msg1}} @{{msg2}}</h1>' + '<h2>@{{ parentMsg }}</h2>' +
                '<input type="text" v-model="message "/><button v-on:click="updateParentMsg">update</button></div>',
                data: function() {
                    return {
                        msg1: 'A custom',
                        msg2: 'component!',
                        message: this.parentMsg
                    }
                },
                methods: {
                    updateParentMsg() {
                        console.log(this.message);
                        this.$parent.$emit('updateParentMsg', this.message);
                    }
                }
            });

            var myVue = new Vue({
                el: '#Component',
                data: {
                    msg: 'parent message'
                },
                methods: {
                    selfUpdate(val) {
                        this.msg = val;
                    }
                },
                mounted: function() {
                    this.$on('updateParentMsg', this.selfUpdate);
                }
            });
        </script>
    </body>
</html>
