<?php

namespace App\Robot;

class CarpetFloorCleaningRobot
{
    /**
     * Takes 1 sec to cleaning 1 meter square
     * @var int
     */
    protected $cleaningTimePerMeterSquare = 2;

    protected $area;

    public function __construct($area)
    {
        $this->area = $area;
    }

    public function getCleaningTimePerMeterSquare()
    {
        return $this->cleaningTimePerMeterSquare;
    }

    public function startCleaning()
    {


    }

}