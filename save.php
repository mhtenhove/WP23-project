<?php
    $fp = fopen('/data/data.json', 'w');
    fwrite($fp, json_encode($_POST['player']));
    fclose($fp);
?>
