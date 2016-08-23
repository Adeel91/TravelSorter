<?php
include_once('BoardingCards.php');
include_once('AirportShuttle.php');
include_once('TrainBoardingCards.php');
include_once('FlightBoardingCards.php');
include_once('TravelSorter.php');
include_once('TravelGuide.php');


$source = $_REQUEST['source'];
$destination = $_REQUEST['destination'];


if($source == 'Kiev' && $destination == 'Rotterdam'){
  $travelPlan = new TravelGuide([
      
    new AirportShuttle('Lviv', 'Lviv Danylo Halytskyi International Airport'),
    new FlightBoardingCards('Stockholm', 'Amsterdam Schiphol', '7B', 'SK22', '18'),
    new TrainBoardingCards($source, 'Lviv', '18C', 'X12'),
    new FlightBoardingCards('Lviv Danylo Halytskyi International Airport', 'Stockholm', '3A', 'BF134', '45B', '344'),
    new TrainBoardingCards('Amsterdam Schiphol', $destination, '12B', 'T13'),
  ]);
  echo $travelPlan->TravelGuideString();
}
else{
  $travelPlan = new TravelGuide([
      
    new AirportShuttle('Frankfurt', 'Frankfurt Airport'),    
    new FlightBoardingCards('Karachi', 'Lahore Airport', '12B', 'SK674', '18'),
    new TrainBoardingCards($source, 'Frankfurt', '18C', 'X12'),
    new FlightBoardingCards('Frankfurt Airport', 'Karachi', '3A', 'BF134', '45B', '344'),
    new TrainBoardingCards('Lahore Airport', $destination, '12B', 'T75'),
  ]);
  echo $travelPlan->TravelGuideString();

}

?>