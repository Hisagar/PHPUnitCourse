<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase{
    public function testTwoPlusTwo(){
        $this->assertEquals(4,2+2);
    }
    public function testTwoPlusTwoIncorrect(){
        $this->assertNotEquals(4,2+5);
    }

    public function testTrueIsTrue(){
        $this->assertTrue(true);
    }

}
