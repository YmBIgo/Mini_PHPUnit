<?php

namespace Coffeecup\PhpunitTest8110;

use Exception;

class MyAssertion {
	public static function assertSame($expected, $actual, $message = '') {
		if ($expected == $actual) {
			return true;
		}
		throw new Exception($message);
	}
}