<?php
function p_print($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$json_file1 = file_get_contents("../data/current_player.json");
$json_file2 = file_get_contents("../data/data.json");

// load current player scores
$score_json = file_get_contents("../data/scores.json");
$scores = json_decode($score_json, true);

// check if round scores exist and otherwise initialize
$round_scores_exists = true;
$round_score_json = file_get_contents("../data/round_scores.json");
if ($round_score_json == false) {
    $round_scores_exists = false;
}
if ($round_scores_exists) {
    $round_scores = json_decode($round_score_json);
} else {
    $round_scores = Array();
}

// we assume $round_scores is an array of player id => score.

$current_player_id = json_decode($json_file1, true);

// if scores for current player exists in $round_scores, replace the score
// else, add the score
if (isset($round_scores[$current_player_id])) {
    $round_scores[$current_player_id] = $scores[$current_player_id];
} else {
    array_push($round_scores, Array(
        $current_player_id => $scores[$current_player_id];
    ));
}

// write the new round scores.
$round_score_newjson = fopen("../data/round_scores.json", "w");
fwrite($round_score_newjson, $round_scores);

$players = json_decode($json_file2, true);
$player_count = count($players) - 1;

if ($current_player_id < $player_count) {
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
