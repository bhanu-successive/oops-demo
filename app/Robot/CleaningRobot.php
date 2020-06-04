<?php

namespace App\Robot;

use App\Robot\HardFloorCleaningRobot;
use App\Robot\CarpetFloorCleaningRobot;

class CleaningRobot
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
        echo " \n ...... Initialising robot ..... ";
        if (strtolower($this->floor) === 'hard') {
            $this->cleaningRobot = new HardFloorCleaningRobot($this->area);
        }

        if (strtolower($this->floor) === 'carpet') {
            $this->cleaningRobot = new CarpetFloorCleaningRobot($this->area);
        }

        echo " \n.... Robot all set ....";
        echo " \n Battery life: ".$this->workTimeInOneCharge." secs";
    }

    public function startCleaning()
    {
        echo " \n Total area to be cleaned: ".$this->area." mSq";
        echo " \n Time taken per square meter: ".$this->cleaningRobot->getCleaningTimePerMeterSquare()." secs";
        $area = $this->area;

        while( $area) {
            $area = $area - ($this->workTimeInOneCharge / $this->cleaningRobot->getCleaningTimePerMeterSquare());

            if($area < 0) {
                $area = 0;
            }
            echo " \n Area remaining to be cleaned: ".$area. " mSq";

            if ($area / ($this->workTimeInOneCharge / $this->cleaningRobot->getCleaningTimePerMeterSquare())) {
                echo " \n Robot exhausted. Charging ... It will take ".$this->fullChargeTime." secs";
            }
        }

        echo " \n All cleaning done!!!";
    }
}