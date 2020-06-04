<?php

namespace App\Cleaning;

use App\Robot\CleaningRobot;
use App\Cleaning\Contracts\IFloorCleaning;

class HardFloorIFloorCleaningService implements IFloorCleaning
{
    /**
     * Takes 1 sec to cleaning 1 meter square
     * @var int
     */
    protected $cleaningTimePerMeterSquare = 1;

    protected $area;

    protected $robotInstance;

    public function __construct($area)
    {
        $this->area = $area;
        $this->robotInstance = new CleaningRobot();
    }

    public function cleanFloor()
    {
        echo " \n Total area to be cleaned: ".$this->area." mSq";
        echo " \n Time taken per square meter: ".$this->cleaningTimePerMeterSquare." secs";
        $area = $this->area;

        while( $area) {
            $area = $area - ($this->robotInstance->getWorkTimeInOneCharge() / $this->cleaningTimePerMeterSquare);

            if($area < 0) {
                $area = 0;
            }
            echo " \n Area remaining to be cleaned: ".$area. " mSq";

            if ($area / ($this->robotInstance->getWorkTimeInOneCharge() / $this->cleaningTimePerMeterSquare)) {
                echo " \n Robot exhausted. Charging ... It will take ".$this->robotInstance->getFullChargeTime()." secs";
            }
        }

        echo " \n All cleaning done!!!";

    }

}