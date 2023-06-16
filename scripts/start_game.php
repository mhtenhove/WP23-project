<?php
    function p_print($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    // load decks
    $player_deck = Array();
    $cards = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,
                37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52];
    // first, deal cards
    for ($x = 0; $x < 2; $x++) {
        $i = random_int(1, 52);
        while (!in_array($i, $cards)) {
            $i = random_int(1, 52);
        }
        if (in_array($i, $cards)) {
            array_push($player_deck, $i);
            array_splice($cards, $i, 1);
        }
    }
    
    //p_print($player_deck);

    // save
    $new_json = json_encode($player_deck);
    $outfile = fopen("../data/decks.json", "w");
    fwrite($outfile, $new_json);
    echo($player_deck[0]), (" "), ($player_deck[1]);
    // save scores
    $score = 0;
    $value_json = file_get_contents("../data/card_values.json");
    $values = json_decode($value_json, true);
    // get values
    for ($x = 0; $x < count($values); $x++){
        if ($values[$x]["card"] == $player_deck[0]) {
            $score += $values[$x]["value"];
        }
        if ($values[$x]["card"] == $player_deck[1]) {
            $score += $values[$x]["value"];
        }
    }
    if ($score == 21) {
        //player auto wins
        echo "blackjack";
    }
    $current_player = file_get_contents("../data/current_player.json");
    $player_score = [$current_player, $score];
    $scorefile = fopen("../data/scores.json", "w");
    fwrite($scorefile, json_encode($player_score));
    
?>
