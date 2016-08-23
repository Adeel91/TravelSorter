<?php
/**
 * Travel Guide Class
 *
 * Brief description for controller (if any)
 * - collects all the boarding cards and returns the complete route
 * 
 * @author	: Muhammad Adeel
 * @owner	: Muhammad Adeel
 * @copyright   : Copyright (c) 2016 (version - 1.0) TEST
 * @created	: 22-04-2016
 * @modified    : 22-04-2016
*/

class TravelGuide
{
	public function __construct($boardingPasses)
	{
            $this->boardingPasses = $boardingPasses;
            $boardingPasses = new TravelSorter($this->boardingPasses);
            $this->boardingPasses = $boardingPasses->sort();
	}
        
	public function TravelGuideString()
	{		
            $str = '<ol>';
            for ($counter = 0; $counter < count($this->boardingPasses); $counter++) {
                    $currentPass = $this->boardingPasses[$counter];
                    $str .= '<li>' . $currentPass->toString() . '</li>';
            }
            $str .= '<li>You have arrived at your final destination.</li>';
            $str .= '</ul>';
            return $str;
	}

}