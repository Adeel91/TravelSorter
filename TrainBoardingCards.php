<?php
/**
 * Train Boarding Cards Class
 *
 * Brief description for controller (if any)
 * - detailed route of Train using base class
 * 
 * @author	: Muhammad Adeel
 * @owner	: Muhammad Adeel
 * @copyright   : Copyright (c) 2016 (version - 1.0) TEST
 * @created	: 22-04-2016
 * @modified    : 22-04-2016
*/

class TrainBoardingCards extends BoardingCards
{
    private $train;
	
    function __construct($source, $destination, $seat, $train)
    {
        parent::__construct($source, $destination, $seat);

        $this->train = $train;
}

    public function toString()
    {
        return 'Take train ' . $this->train . ' from ' . BoardingCards::getSource($this) . ' to ' . BoardingCards::getDestination($this) . '. Sit in seat ' . BoardingCards::getSeat($this) . '.';
    }
}
