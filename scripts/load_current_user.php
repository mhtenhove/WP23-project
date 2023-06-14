<?php

function p_print($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$json_file = file_get_contents("../data/current_player.json");
$data = json_decode($json_file, true);

$json_file = file_get_contents("../data/data.json");
$decoded_file = json_decode($json_file, true);

$identifier_file = file_get_contents("../data/current_player.json");
$identifier_decode = json_decode($identifier_file, true);
$identifier = $identifier_decode[0];

$current_player = $decoded_file[$identifier];
$current_player_name = $current_player['name'];

echo($current_player_name)
?>
