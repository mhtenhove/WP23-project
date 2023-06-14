<?php
function p_print($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$json_file1 = file_get_contents("../data/current_player.json");
$json_file2 = file_get_contents("../data/data.json");
$current_player_id = json_decode($json_file1, true);
$players = json_decode($json_file2, true);
$player_count = sizeof($players) - 1;

if ($current_player_id != $player_count) {
    $current_player_id += 1;
    $updated_player_id = json_encode($current_player_id);
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, $updated_player_id);
} else {
    $current_player = 1;
    $updated_player = json_encode($current_player);
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, $updated_player);
}

p_print($current_player_id);

?>
