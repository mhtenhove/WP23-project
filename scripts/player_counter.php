<?php
if (isset($_POST['join'])) {
    $json_file = file_get_contents("../data/data.json");
    $players = json_decode($json_file, true);
    $player_id = 0;

    foreach ($players as $key => $value) {
        $player_id = $value['id'];
    }
    $player_id += 1;
    if ($player_id == 1) {
        array_push($players, [
            'id' => $player_id,
            'name' => $_POST['player-name'],
            'status' => 'active'
        ]);
    } else if ($player_id > 1 and $player_id < 5) {
        array_push($players, [
            'id' => $player_id,
            'name' => $_POST['player-name'],
            'status' => 'inactive'
        ]);
    }

    $json_file = fopen('../data/data.json', 'w');
    fwrite($json_file, json_encode($players));
    fclose($json_file);
    header("Location: ../game.php");
    die();
}
    else {
        echo("<div><p>The maximum player count has been reached, try again later</p>");
    }