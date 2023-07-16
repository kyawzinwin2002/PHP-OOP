<?php

class FileWriter{
    public $fileName,$stream;
    function __construct(string $fileName)
    {
        $this->fileName = $fileName;                   
        $this->stream = fopen($this->fileName,"w");
    }

    public function write($data){        
            fwrite($this->stream,$data);        
    }

    function __destruct()
    {
        fclose($this->stream);
    }
}