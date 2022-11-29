<?php
$listObj = file_get_contents("todo.json");
$todoList = json_decode($listObj, true);


header("Content-Type: application/json");
echo json_encode($todoList);
