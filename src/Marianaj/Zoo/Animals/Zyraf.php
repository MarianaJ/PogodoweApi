<?php
/**
 * Created by PhpStorm.
 * User: Niamka
 * Date: 23.11.2015
 * Time: 13:04
 */
namespace Marianaj\Zoo\Animals;

class Zyraf{
    private $name;

    public function __construct($name){
        $this->name = $name;

    }

    public function say(){
        echo(' Ja mam dluga szyje ');
        echo(' Jestem  ' .$this->name);
    }

    public function play(){
        echo( '|| Swietna zabawa.Ja jestem '.$this->name );
    }
}