<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Coffeecup\PhpunitTest8110\Chick;
use Coffeecup\PhpunitTest8110\Feed\Worm;

class ChickTest extends TestCase {
	public function testEat() {
		$chick = new Chick();
		
		$chick->eat(new Worm());
		$this->assertSame(1, $chick->getEatCount());

		$chick->eat(new Worm());
		$this->assertSame(3, $chick->getEatCount());
	}
}

$chickTest = new ChickTest("testEat");
$chickTest->run();