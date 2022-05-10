<?php
require "jsonFileHandler.php";

class Todo extends JsonFileHandler
{

    public function AddTodo($title){
        $key = "todoid" . rand(1000, 10000);
        $entry = array($key => ["title" => $title]);
        $this->SaveData($entry);
    }

    public function GetTodos(){
        return $this->GetData();
        // $todoList = $this->GetData();
        // echo "<b>ALL YOUR TODOs</b>" . "</br>";
        // $count = 1;
        // foreach ($todoList as $todos){
        //     foreach ($todos as $key => $value){
        //         echo $count . ". " . $value;
        //         echo "</br>";
        //         $count += 1;
        //     }
        // }
    }

    public function UpdateTodo($id, $title){
        $todoList = $this->GetData();
        $affectedTodo = $todoList[$id];
        $affectedTodo["title"] = $title;
    }

}

?>
