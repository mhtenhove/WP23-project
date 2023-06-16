<?php
$roundscorefile = file_get_contents("../data/round_scores.json");
$roundscores = json_decode($roundscorefile);

for ($x = 0; $x < count($roundscores); $x++) {
    echo $roundscores[$x][1];
    echo " ";
}

?>
