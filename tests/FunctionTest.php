<?php


use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase{
    public function testTwoPlusTwoUsingFunctions(){
        require 'functions.php';
        $this->assertEquals(4,add(2,2));
        $this->assertEquals(7,add(2,5));
        $this->assertEquals(6,add(2,4));
        $this->assertEquals(5,add(2,3));
    }
}