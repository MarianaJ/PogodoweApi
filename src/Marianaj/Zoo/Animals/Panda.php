<?php
/**
 * Created by PhpStorm.
 * User: Niamka
 * Date: 23.11.2015
 * Time: 12:52
 */

namespace Marianaj\Zoo\Animals;

class Panda{
    private $name;

    public function __construct($name){
        $this->name = $name;

    }

    public function say(){
        echo('Ja spie ');
        echo('Jestem ' .$this->name);
    }

    public function play(){
        echo( '|| Swietna zabawa.Ja jestem '.$this->name );
    }
}