<?php

namespace Test\Units;

use PHPUnit_Framework_TestCase;
use Mockery as m;
use Faker\Factory;

class TestCase extends PHPUnit_Framework_TestCase
{
    protected $faker;

    public function setUp()
    {
        $this->faker = Factory::create();
    }

    public function tearDown()
    {
        m::close();
    }
}
