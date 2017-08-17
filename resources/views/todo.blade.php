<!DOCTYPE html>

<!-- For playing nice with Vue.js syntax at PhpStorm -->
@if (false)<html xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"> @endif

<html>
    <head>
        <meta charset="UTF-8">
        <title>Todo List</title>
    </head>
    <body>
        <br/><br/><br/>
        <div id="todoList">
            <label for="todoListData">Todo List</label>
            <input id="todoListData" type="text" v-on:keyup.enter="addList(nowTodoThing)" v-model="nowTodoThing"/>
            <div id="list">
                <li v-for="(todo, index) in todoThings">
                    <span v-show="!(editSwitch[index])">@{{ todo }}</span>
                    <button v-show="!(editSwitch[index])" v-on:click="showEditList(index, todo)">Edit</button>
                    <input v-show="editSwitch[index]" v-model="editTodoThing"  v-on:keyup.enter="editList(index, editTodoThing)"/>
                    <button v-show="editSwitch[index]" v-on:click="editList(index, editTodoThing)">Save</button>                    <button v-on:click="removeList(index)">Delete</button>
                </li>
            </div>
        </div>

        <script src="{{ asset('js/todo.js') }}"></script>
    </body>
</html>
