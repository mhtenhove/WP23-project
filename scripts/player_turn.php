<?php
function p_print($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
$json_file = file_get_contents("../data/current_player.json");
$current_player = json_decode($json_file, true);


if ($current_player == [1]) {
    $current_player = [2];
    $updated_player = json_encode($current_player);
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, $updated_player);
} else {
    $current_player = [1];
    $updated_player = json_encode($current_player);
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, $updated_player);
}

p_print($current_player);
//header("Location: ../game.php");
//exit()

?>
