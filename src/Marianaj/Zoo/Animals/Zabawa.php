<?php

namespace Marianaj\Zoo\Animals;


class Zabawa
{
	private $lion;
    private $panda;
    private $zyraf;

	public function __construct($lion, $panda, $zyraf)
	{
		$this->lion = $lion;
        $this->panda = $panda;
        $this->zyraf = $zyraf;

	}

	public function play()
	{
		$this->lion->play();
        $this->panda->play();
        $this->zyraf->play();
	}
}
