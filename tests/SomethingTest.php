<?php

use PHPUnit\Framework\TestCase;
use AJSDev\Something;

/**
 * @coversDefaultClass \AJSDev\Something
 */
class SomethingTest extends TestCase {
	/**
	 * @test
	 * @group weird
	 * @covers ::weird()
	 */
	public function should_equal_true() {
		$this->assertTrue(Something::weird());
	}
}