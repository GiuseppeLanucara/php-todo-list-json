<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>ToDo List</title>
</head>

<body>
    <div id="app">
        <div class="container mt-4">
            <h1 class="text-center mb-3">ToDo List</h1>
            <div class="row justify-content-center">
                <div class="col-6">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="todo in todoList">
                            {{ todo.text }}
                        </li>
                    </ul>
                    <input type="text" class="form-control-lg mt-4" v-model="newTodo">
                    <button class="btn btn-secondary ms-3" @click="addNewToDo">Add</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>