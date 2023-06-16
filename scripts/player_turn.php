<?php
function p_print($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$json_file1 = file_get_contents("../data/current_player.json");
$json_file2 = file_get_contents("../data/data.json");

$current_player_id = json_decode($json_file1, true);

// load current player scores
$score_json = file_get_contents("../data/scores.json");
$scores = json_decode($score_json, true);

// check if round scores exist and otherwise initialize
$roundscorefile = file_get_contents("../data/round_scores.json");
$roundscores = json_decode($roundscorefile);
if ($current_player_id == $scores[0]) {
    array_push($roundscores, [$current_player_id, $scores[1]]);
}
// we assume $round_scores is an array scores, one for each player, so first element is player 1 etc.

$roundscorefile2 = fopen("../data/round_scores.json", "w");
fwrite($roundscorefile2, json_encode($roundscores));

$players = json_decode($json_file2, true);
$player_count = count($players) - 1;

if ($current_player_id < $player_count) {
    $current_player_id += 1;
    $updated_player_id = json_encode($current_player_id);
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, $updated_player_id);
} else {
    $best_player = 0;
    for ($x = 0; $x < count($roundscores); $x++) {
        $best_player_score = 0;
        if ($roundscores[$x][1] > $best_player_score) {
            $best_player = $roundscores[$x][0];
            $best_player_score = $roundscores[$x][1];
        }
    }
    if ($best_player != 0) {
        echo $best_player;
    }
}
?>
