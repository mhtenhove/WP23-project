<?php
    //Init script
    
    // Delete scores.json
    $scorefile = fopen("../data/scores.json", "w");
    fwrite($scorefile, "");
    
    // Reset current_player.json
    $cur_play_file = fopen("../data/current_player.json", "w");
    fwrite($cur_play_file, "1");
    
?>
