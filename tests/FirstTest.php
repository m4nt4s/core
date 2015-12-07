<?php

namespace mantas\core\tests;

class FirstTest extends \TestCase
{

    public function testSomethingIsTrue()
    {
        $this->visit('/')
            ->see('Laravel 5')
            ->dontSee('Laravel 6');
    }
}