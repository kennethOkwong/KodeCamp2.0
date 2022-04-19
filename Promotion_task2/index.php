<?php

require "todoHandler.php";

$todo_1 = new Todo("todo.json");

//Uncomment the code below to add todo as 
$todo_1->AddTodo("Print Flex");
$todo_1->AddTodo("Attend KodeCamp class");
$todo_1->AddTodo("Remember to push your codes");

$todo_1->ViewTodos();

?>