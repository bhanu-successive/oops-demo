<?php

namespace App;
use App\Robot\CleaningRobot;

class CleaningService
{

    protected $area;
    protected $floor;
    protected $robot;

    public function __construct($floor, $area)
    {
        //parent::__construct($floor, $area);
        $this->area = $area;
        $this->floor = $floor;
        $this->initiateRobot();
        $this->startCleaning();
    }

    protected function initiateRobot()
    {
        $this->robot = new CleaningRobot($this->floor, $this->area);
    }

    protected function startCleaning()
    {
        $this->robot->startCleaning();

    }
}