<?php

/*
error_reporting(E_ALL);
ini_set('display_errors', '1');
*/


if (isset($_POST['feed'])) {
    
    $userid = $_POST["feed"];


    $client = ""; //Instagram Client ID

    $feed = "https://api.instagram.com/v1/users/".$userid."/media/recent?client_id=".$client;

//imgs: data[i].images.standard_resolution.url  

    $json = file_get_contents($feed); 

    $feed = fopen('../data/feed.json', 'w');
    fwrite($feed,$json);
    fclose($feed);
}
else{ echo "You didnt click anything";}

?>