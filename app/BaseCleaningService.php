<?php

namespace App;

class BaseCleaningService
{

    protected $area;
    protected $floor;
    protected $cleaningRobot;
    /**
     * It takes 30 secs to fully charge the robot
     * @var int
     */
    protected $fullChargeTime = 30;

    /** In one charge robot can clean for 60 secs
     * @var int
     */
    protected $workTimeInOneCharge = 60;
    public function __construct($floor, $area)
    {
        $this->area = $area;
        $this->floor = $floor;
        $this->setCleaningRobot();
    }

    public function setCleaningRobot()
    {
        echo " ...... Initialising robot ..... ";
        if (strtolower($this->floor) === 'hard') {
            $this->cleaningRobot = new HardFloorCleaningRobot($this->area);
        }

        if (strtolower($this->floor) === 'carpet') {
            $this->cleaningRobot = new CarpetFloorCleaningRobot($this->area);
        }

        echo " .... Robot all set ....";
    }

    public function startCleaning()
    {
        echo " Battery time: ".$this->workTimeInOneCharge." \n";
    }
}