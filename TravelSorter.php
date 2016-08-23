<?php
/**
 * Travel Sorter Class
 *
 * Brief description for controller (if any)
 * - sorting algorithm for the complete route (from source to destination)
 * 
 * @author	: Muhammad Adeel
 * @owner	: Muhammad Adeel
 * @copyright   : Copyright (c) 2016 (version - 1.0) TEST
 * @created	: 22-04-2016
 * @modified    : 22-04-2016
*/

class TravelSorter
{
    private $destinationIndex = array();
    private $sourceIndex = array();

    function TravelSorter($boardingPasses)
    {
        $this->boardingPasses = $boardingPasses;
    }
    
    public function sort()
    {
        self::createIndex();            
        $initialLocation = self::getInitialLocation();
        $sortedBoardingPasses = array();
        $currentLocation = $initialLocation;
           
        while ($currentBoardingPass = (array_key_exists($currentLocation, $this->sourceIndex)) ? $this->sourceIndex[$currentLocation] : null) { 
            array_push($sortedBoardingPasses, $currentBoardingPass);
            $currentLocation = BoardingCards::getDestination($currentBoardingPass);
        }
        return $sortedBoardingPasses;
    }

    function createIndex()
    {
        for ($counter = 0; $counter < count($this->boardingPasses); $counter++) {
            $boardingPass = $this->boardingPasses[$counter];
            $this->sourceIndex[BoardingCards::getSource($boardingPass)] = $boardingPass;
            $this->destinationIndex[BoardingCards::getDestination($boardingPass)] = $boardingPass;
        }
    }
    
    private function getInitialLocation()
    {
        for ($counter = 0; $counter < count($this->boardingPasses); $counter++) {
            $source = BoardingCards::getSource($this->boardingPasses[$counter]);
            if (!array_key_exists($source, $this->destinationIndex)) {  
                return $source;
            }
        }
        return null;
    }
}
