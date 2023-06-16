<?php
$statuspage = fopen("../data/game_winner.json", "w");
fwrite($statuspage, $_GET["winner"]);
?>
