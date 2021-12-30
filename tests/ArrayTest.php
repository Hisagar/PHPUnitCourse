<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase {

    protected $array;

    protected function setUp():void{
        $this->array = Array(
            0=>'one',
            1=>'two');
    }

    public function testArrayInitiallyHasOneItem() {
        $this->assertNotEmpty($this->array);
        $this->assertEquals("one", $this->array[0]);
    }

    public function testCanAddItemToArray() {
        $this->assertEquals("two", $this->array[1]);
        $this->assertCount(2, $this->array);
    }
}
