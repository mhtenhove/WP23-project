<?php
if (isset($_POST['player-name'])) {
    $json_file = file_get_contents("../data/data.json");
    $players = json_decode($json_file, true);
}
?>