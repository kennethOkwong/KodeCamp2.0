<?php
require "jsonFileHandler.php";

class Todo extends JsonFileHandler{

    public function AddTodo($title){
        $key = "todoid" . rand(1000, 10000);
        $entry = array($key => ["title" => $title]);
        $this->SaveData($entry);
    }

}

?>
