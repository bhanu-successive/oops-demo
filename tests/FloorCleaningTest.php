<?php

use PHPUnit\Framework\TestCase;
use App\FloorCleaning;
use PHPUnit\Util\Exception;

class FloorCleaningTest extends TestCase
{
    public function testFloorCleaningWithInvalidArea()
    {
        $instance = new FloorCleaning('noexistingFloor', 120);
        $instance->setCleaningInstance()->expectException(Exception::class);
    }
}