<?php
use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {

        $stub = $this->createMock(SomeClass::class);

        $stub->method('doSomething')
            ->willReturn('sagar');

        $this->assertEquals('sagar', $stub->doSomething());
    }
}

class SomeClass
{
    public function doSomething()
    {
        //return something
    }
}

