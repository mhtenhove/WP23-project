<?php
    function p_print($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    // load decks
    $player_decks = Array(
        0 => Array(),
        1 => Array()
    );
    
    // first, deal cards
    for ($p = 0; $p < count($player_decks); $p++) {
        for ($x = 0; $x < 2; $x++) {
            $i = random_int(1, 52);
            array_push($player_decks[$p], $i);
        }
    }
    
    p_print($player_decks);

    // save
    $new_json = json_encode($player_decks);
    $outfile = fopen("../data/decks.json", "w");
    fwrite($outfile, $new_json);
    
?>
