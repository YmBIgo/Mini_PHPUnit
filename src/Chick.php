<?php
namespace Coffeecup\PhpunitTest8110;

use Coffeecup\PhpunitTest8110\Feed\Worm;

class Chick {
	private $eatCount = 0;
	public function eat(Worm $worm) {
		$this->eatCount++;
	}
	public function getEatCount() {
		return $this->eatCount;
	}
}