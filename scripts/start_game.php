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
    $cards = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,
                37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52];
    // first, deal cards
    for ($p = 0; $p < count($player_decks); $p++) {
        for ($x = 0; $x < 2; $x++) {
            $i = random_int(1, 52);
            while (!in_array($i, $cards)) {
                $i = random_int(1, 52);
            }
            if (in_array($i, $cards)) {
                array_push($player_decks[$p], $i);
                array_splice($cards, $i, 1);
            }
        }
    }
    
    p_print($player_decks);

    // save
    $new_json = json_encode($player_decks);
    $outfile = fopen("../data/decks.json", "w");
    fwrite($outfile, $new_json);
    
?>