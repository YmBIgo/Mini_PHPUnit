<?php

require "vendor/autoload.php";

use Coffeecup\PhpunitTest8110\MyPhpUnit;
use Coffeecup\PhpunitTest8110\MyAssertion;
use Coffeecup\PhpunitTest8110\Chick;
use Coffeecup\PhpunitTest8110\Feed\Worm;

class MyChickTest extends MyPhpUnit {

	private $counter;
	private $chick;

	public function beforeTest() {
		echo "Initializing Chick...\n";
		$this->chick = new Chick();
	}

	public function testEat() {
		$this->chick->eat(new Worm());
		MyAssertion::assertSame(1, $this->chick->getEatCount(), "chick eat count shold be 1");
	}
	public function testEat2() {
		$this->chick->eat(new Worm());
		$this->chick->eat(new Worm());
		MyAssertion::assertSame(2, $this->chick->getEatCount(), "chick eat count shold be 2");
	}

	public function afterTest() {
		echo "Finish Test !";
	}
}

$chickTest = new MyChickTest();
$chickTest->runAll();
$testResult = $chickTest->getResult();