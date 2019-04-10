Big Brother has found You.

<?php 
//files, location, locationapi
//print_r($location);

/*
    [time] => 1553783305
    [EmpNo] => 0195
    [Desc] => this is s test
    [location] => 403 Hwy 12 E,Starkville,MS 39759
    [ext] => jpg
    [latitude] => 34.25377218531246
    [longitude] => -88.68432460405309
    [file] => 1553783305.0195.this is s test.403 Hwy 12 E,Starkville,MS 39759.34.25377218531246.-88.68432460405309.jpg
    [gps_location] => 194 Highway 12 E,Starkville,MS 39759-3766
    [gps_override] => 341 S Veterans Memorial Blvd,Tupelo,MS 38804

*/

function location_gps_div($type, $location, $lat, $long, $map)
{
	echo '<tr><td valign="top" border-bottom="1px solid #000">';

	echo $type;
	echo '<br>' . $location;
	echo '<br>latitude: ' . $lat;
	echo '<br>longitude: ' . $long;
	echo '</td>';
	echo '<td valign="top" border-bottom="1px solid #000">';
	echo '<img src="' . $map . '">';
	echo '</td></tr>';
}

if (!isset($Details))
{
	echo "<P>No GPS Updates Found";
	return false;
}
echo '<div id="file"><input type=hidden name=file value="' . $Details->file . '"><img src="' . APPURL . 'upload/?show=1&file=' . urlencode($Details->file) . '" id="file"></div>';
echo '<div id=assigncolumn2>';

$array = array('Date', 'EmpNo', 'Desc', 'location');
foreach ($array as $key)
{
	if ($key == 'location_map' || $key == 'override_map')
	{
		echo '<br><img src="' . $Details->$key . '">';
	}
	else
	{
		echo '<BR>' . $key . ' : ' . $Details->$key;
	}	
}
echo '<table>';
location_gps_div('location_gps', $Details->location_gps, $Details->location_latitude,  $Details->location_longitude, $Details->location_map);
location_gps_div('override_gps', $Details->override_gps, $Details->override_longitude, $Details->override_longitude, $Details->override_map);
echo '</table>';
echo '</div>';



?>