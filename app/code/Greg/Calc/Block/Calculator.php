<?php 

namespace greg\calc\Block; 

class Calculator{ 

    public function divide($x, $y) { 
        return $x/$y;
    }

    public function multiply($x, $y){
        return $x*$y;
    } 
    public function add($x,$y){ 
        return $x+$y;
        }  

    public function sub($x,$y){
        return $x-$y;  
        }
} 

