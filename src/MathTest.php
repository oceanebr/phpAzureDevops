<?php
require 'Math.php';

// use PHPUNIT_Framework_TestCase as TestCase;
// sometimes it can be
use PHPUnit\Framework\TestCase as TestCase;

class MathTest extends TestCase{
    public function testAddition() {
        $math = new Math();
        $this->assertEquals(3, $math->addition(1,2));
    }
}