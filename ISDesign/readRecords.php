<?php

$servername = 'localhost';
$user_name= 'u978823660_apap';
$password = 'eJaXuJuMyz';

$con= mysqli_connect($servername,$user_name,$password);
mysqli_select_db($con,"u978823660_apap");

$query = "SELECT * FROM u978823660_apap.events";
$result = mysqli_query($con,$query);
$eventsinfo = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
		        $eventsinfo[] = $row;
    }
	
	$myJson = json_encode(utf8ize($eventsinfo));
	

	echo $myJson;
}
	
 else {
    echo "0 results";
}

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}
?>