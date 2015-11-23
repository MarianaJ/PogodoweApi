<?php

namespace Marianaj\Zoo\Animals;

class Lion{
    private $name;

    public function __construct($name){
        $this->name = $name;

    }


    public function say(){
        echo('Ararrarara ');
        echo('Teraz je ' .$this->name);
    }


    public function play(){
        echo( '|| Swietna zabawa.Ja jestem '.$this->name );
    }
}
