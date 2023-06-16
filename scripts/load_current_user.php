<?php

$player_file = file_get_contents("../data/current_player.json");
$data = json_decode($player_file, true);

$json_file = file_get_contents("../data/data.json");
$decoded_file = json_decode($json_file, true);

$identifier_file = file_get_contents("../data/current_player.json");
$identifier = json_decode($identifier_file, true);

$current_player = $decoded_file[$identifier];
$current_player_name = $current_player['name'];

echo($current_player_name)
?>
