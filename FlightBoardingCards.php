<?php
/**
 * Flight Boarding Cards Class
 *
 * Brief description for controller (if any)
 * - detailed route of Flight using base class
 * 
 * @author	: Muhammad Adeel
 * @owner	: Muhammad Adeel
 * @copyright   : Copyright (c) 2016 (version - 1.0) TEST
 * @created	: 22-04-2016
 * @modified    : 22-04-2016
*/

class FlightBoardingCards extends BoardingCards
{
    private $flight, $gate, $counter;

    function __construct($source, $destination, $seat, $flight, $gate, $counter = null)
    {
        parent::__construct($source, $destination, $seat);

        $this->flight = $flight;
        $this->gate = $gate;
        $this->counter = $counter;
    }

    public function toString()
    {
            return 'From ' . BoardingCards::getSource($this) . ', take flight ' . $this->flight . ' to ' . BoardingCards::getDestination($this) . '. Gate ' . $this->gate . ', seat ' . BoardingCards::getSeat($this) . '. ' . ($this->counter ? 'Baggage drop at ticket counter ' . $this->counter . '.' : 'Baggage will be automatically transferred from your last leg.');
    }

}