<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

   // $json_string = file_get_contents("http://api.wunderground.com/api/b16db7aa242fba68/conditions/q/CA/San_Francisco.json");   
    //$json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/b16db7aa242fba68/forecast/q/CA/San_Francisco.json");   
    $json_b = json_decode($json_string);

        //pencarian variabel
   // $lctn = $json_a->{"current_observation"}->{"display_location"}->{"city"};
   // $lctn2 = $json_a->{"current_observation"}->{"observation_location"}->{"city"};
   // $lctn3 = $json_a->{"current_observation"}->{"observation_location"}->{"country"};
   // $hari5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};


    $hari = $json_b->{"forecast"}->{"txt_forecast"}->{"date"};
	//$h1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
    //$h2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
    //$h3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"hour"};
    //$h4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"min"};
    //$h6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
    //$h7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
    //$h8 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
    
    

        //eksekusi variabel
   // echo "<h3>${lctn} ${lctn2} City , ${lctn3} \n</h3>";
   // echo "$hari5 \n";
    echo "${hari} \n";
   // echo "<br>";
    //echo "${hari6} \n";
    //echo "<br>";
    //echo "<img src='http://icons.wxug.com/i/c/k/" . $hari7 . ".gif'><br/>";
    //echo "<h3>${hari8} F|C\n</h3>";
    //echo "<br>";
    //echo "Hari ini : ${hari} ${hari1}, ${hari2} ${hari3} ${hari4} \n";

?>