
<div align = center>
<h1>CUACA DI KOTA KENDAL</h1>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode ($json_string);
	
	$a = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
	$b = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
	$c = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
	$d = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};
	$e = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"pretty"};
	$f = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
	$g = $parsed_json->{'forecast'}->{'txt_forecast'}->forecastday[1]->{'title'};
	$h = $parsed_json->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"icon"};	
	
	echo "Tanggal : ${a}\n";
	echo "<br>";
	echo "Bulan : ${b}\n";
	echo "<br>";
	echo "Tahun : ${c}\n";
	echo "<br>";
	echo "Hari : ${d}\n";
	echo "<br>";
	echo "Waktu : ${e}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$f.".gif'><br/>";
	echo "Hari : ${g}\n";
	echo "<br>";
	echo "<img src='http://icons.wxug.com/i/c/k/".$h.".gif'><br/>";
	?>
	</div>