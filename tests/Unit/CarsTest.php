<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
use PHPUnit\Framework\Constraint\IsType;

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
    public function testCollectionCount()
    {
        $cars = car::All();
        $recordCount = $cars->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
    }
}
