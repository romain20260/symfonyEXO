<?php

class Region{

    public $deps = [];

    function __construct($data)
    {

        $this->name =  $data[0]["name"];
        foreach($data as $value){
            $arr = array($value["code_postal"]=>$value["depRegion"]);
            $this->deps = $this->deps + $arr;
        }
 
    }

}
?>