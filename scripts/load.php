<?php
    $json_file = file_get_contents("../data/data.json");
    $data = json_decode($json_file, true);
    if (isset($_GET["attr"])) {
        echo $data[$_GET["attr"]];
    } else {
        echo $json_file;
    }
?>
