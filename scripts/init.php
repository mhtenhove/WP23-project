<?php
    //Init script
    
    // Delete scores.json
    $scorefile = fopen("../data/scores.json", "w");
    fwrite($scorefile, "");
    
    // Delete round_scores.json
    $roundscorefile = fopen("../data/round_scores.json", "w");
    fwrite($roundscorefile, "[[0,0]]");
    
    // Reset current_player.json
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, "1");
    
    // Reset data.json
    $datafile = fopen("../data/data.json", "w");
    fwrite($datafile, '[{"id":0,"name":"Admin"}]');
    
    echo "Initialized game!";
?>
