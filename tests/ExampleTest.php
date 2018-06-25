<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // 1. visit the homepage
        $this->visit('/')
        // 2. press "click me" link
        ->click('Click Me')
        // 3. see "you have clicked me"
        ->see('you have been clicked me')
        // 4. assert that the current url is /feedback
        ->seePageis('/feedback');

    }
}
