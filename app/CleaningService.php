<?php

namespace App;

require 'app/CleaningRobot.php';

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
        echo $floor;
        echo " --- ";
        echo $area;
        $this->initiateRobot();
        $this->startCleaning();
        echo "sdf";exit;
    }

    protected function initiateRobot()
    {
        $this->robot = new CleaningRobot($this->floor, $this->area);
    }

    protected function startCleaning()
    {
        echo " .... Start Cleaning ....\n";
        $this->robot->startCleaning();

    }
}