<?php

function p_print($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$json_file = file_get_contents("../data/current_player.json");
$data = json_decode($json_file, true);
echo($data[0])
?>
