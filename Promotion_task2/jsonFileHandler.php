<?php

class JsonFileHandler{
    public $jsonFileDir;

    public function  __construct($dir){
        $this->jsonFileDir = $dir;
    }

    public function SaveData(array $data){
        if (empty($this->GetData())){
            $newContent = $data;
        }else{
            $newContent = array_merge($this->GetData(), $data);
        }
        file_put_contents($this->jsonFileDir, json_encode($newContent));
    }

    public function GetData(){
        return json_decode(file_get_contents($this->jsonFileDir), true);
    }

}

?>