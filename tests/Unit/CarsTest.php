<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new car();
        $car->Make = 'Hundai';
        $car->Model = 'i';
        $car->Year = '2001';
        $this->assertTrue($car->save());
    }
    public function testDelete()
    {
        $car = new car();
        $car->Make = 'Hundai';
        $car->Model = 'i';
        $car->Year = '2001';
        $car->save();

        $this->assertTrue($car->delete());
    }
}
