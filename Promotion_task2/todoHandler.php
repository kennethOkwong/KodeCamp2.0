<?php
require "jsonFileHandler.php";

class Todo extends JsonFileHandler{

    public function AddTodo($title){
        $key = "todoid" . rand(1000, 10000);
        $entry = array($key => ["title" => $title]);
        $this->SaveData($entry);
    }

    public function ViewTodos(){
        $todoList = $this->GetData();
        echo "<b>ALL YOUR TODOs</b>";
        echo "</br>";
        $count = 1;
        foreach ($todoList as $todos){
            foreach ($todos as $key => $value){
                echo $count . ". " . $value;
                echo "</br>";
                $count += 1;
            }
        }
    }

}

?>
