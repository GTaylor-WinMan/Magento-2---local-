<?php 
namespace Greg\Calc\Model\Example; 

class Plugin
{
    public function afterGetMessage($subject,$result) {
        echo "Calling " , __METHOD__, "\n";
        return $result;
    }
}

