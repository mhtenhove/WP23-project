<?php
    function p_print($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    // load decks
    $json_file = file_get_contents("../data/decks.json");
    
    // first, deal cards
    $player_decks = Array(
        0 => $json_file[0],
        1 => $json_file[1]
    );
    for ($x = 0; $x < 2; $x++) {
        $i = random_int(1, 52);
        array_push($player_decks[0], $i);
    }
    p_print($player_decks);
    // wait for user to select hit or stand
    
    // do the rest
    
    // save
    $new_json = json_encode($player_decks);
    $outfile = fopen("../data/decks.json", "w");
    fwrite($outfile, $new_json);
    
?>
