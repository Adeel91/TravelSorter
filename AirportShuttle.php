<?php
/**
 * Airport Shuttle Class
 *
 * Brief description for controller (if any)
 * - detailed route of Airport Shuttle using base class
 * 
 * @author	: Muhammad Adeel
 * @owner	: Muhammad Adeel
 * @copyright   : Copyright (c) 2016 (version - 1.0) TEST
 * @created	: 22-04-2016
 * @modified    : 22-04-2016
*/

class AirportShuttle extends BoardingCards
{
    function __construct($source, $destination, $seat = null)
    {
        parent::__construct($source, $destination, $seat);
    }

    public function toString()
    {
        return 'Take the airport bus from ' . BoardingCards::getSource($this) . ' to ' . BoardingCards::getDestination($this) . '. ' . (BoardingCards::getSeat($this) ? 'Sit in seat ' . BoardingCards::getSeat($this) . '.' : 'No seat assignment.');
    }
}

