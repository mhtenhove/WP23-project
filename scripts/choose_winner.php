<?php
$statuspage = fopen("../data/game_status", "w");
fwrite($statuspage, $_GET["winner"]);
?>
