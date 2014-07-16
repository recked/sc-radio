<?php

/*
error_reporting(E_ALL);
ini_set('display_errors', '1');
*/

if (isset($_POST['user'])) {
    
    $user = $_POST["user"];


    $client = "";  //Instagram Client ID

    $search = "https://api.instagram.com/v1/users/search?q=".$user."&client_id=".$client;

    //user id: data[0].id  profile pic: data[0].profile_picture

        $json = file_get_contents($search); 

        $search = fopen('../data/id.json', 'w');
        fwrite($search,$json);
        fclose($search);
}
else{ echo "You didnt click anything";}

?>