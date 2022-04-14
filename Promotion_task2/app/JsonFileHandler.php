<?php
class JsonFileHandler{
    protected $jsonFileDir;

    public function  __construct($dir){
        $this->jsonfileDir = $dir;
    }

    public function SaveData(array $data){
        $existingContent = $this->getData($this->jsonFileDir);
        $newContent = array_merge($existingContent, $data);
        json_encode(file_put_contents($this->jsonFileDir, $newContent));
    }

    public function getData($dir = "$this->jsonFileDir"){
        return json_decode(file_get_contents($dir));
    }

    public function UpdateData($dir = "$this->jsonFileDir"){
        
    }
}

?>