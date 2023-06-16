<?php

if (isset($_POST['join'])) {
    $player_name = $_POST['player-name'];
    if (empty($player_name)) {
        header('Location: ../index.php');
    }

    else if (!preg_match('/^[a-zA-Z0-9]+$/', $player_name)){
        header('Location: ../index.php');
    }

    else {
        $json_file = file_get_contents('../data/data.json');
        $players = json_decode($json_file, true);
        $player_id = 0;

        foreach ($players as $key => $value) {
            $existing_name = $value['name'];
            if ($player_name == $existing_name) {
                $player_name .= '1';
            }
        }

        foreach ($players as $key => $value) {
            $player_id = $value['id'];
        }
        $player_id += 1;
        if ($player_id == 1) {
            array_push($players, [
                'id' => $player_id,
                'name' => $player_name,
                'status' => 'active'
            ]);
        } else if ($player_id > 1 and $player_id < 5) {
            array_push($players, [
                'id' => $player_id,
                'name' => $player_name,
                'status' => 'inactive'
            ]);
        }

        $json_file = fopen('../data/data.json', 'w');
        fwrite($json_file, json_encode($players));
        fclose($json_file);
        header('Location: ../game.php');
        die();
    }

}
    else {
        echo('<div><h1>The maximum player count has been reached, try again later</h1>');
    }