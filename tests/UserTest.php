<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {

        $user = new User;

        $user->first_name = "Sagar";
        $user->surname = "Wankhade";

        $this->assertEquals('Sagar Wankhade', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->first_name);
    }
}