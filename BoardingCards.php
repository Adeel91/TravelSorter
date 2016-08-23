<?php
/**
 * Boarding Cards Class
 *
 * Brief description for controller (if any)
 * - Base class which is used to implement all other methods
 * - extend boarding cards for each mode of transportation
 * 
 * @author	: Muhammad Adeel
 * @owner	: Muhammad Adeel
 * @copyright   : Copyright (c) 2016 (version - 1.0) TEST
 * @created	: 22-04-2016
 * @modified    : 22-04-2016
*/

class BoardingCards
{
    private $source = '';	
    private $destination = '';
    private $seat = '';

    function __construct($source, $destination, $seat)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->seat = $seat;
    }

    public static function getSource($obj)
    {
            return $obj->source;
    }

    public static function getDestination($obj)
    {
            return $obj->destination;
    }

    public static function getSeat($obj)
    {
            return $obj->seat;
    }

}