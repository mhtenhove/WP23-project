<?php
    function p_print($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    p_print("starting save");
    p_print("opening file");
    if(is_writable('../data/data.json')){
        p_print("file is writable");
    }
    $fp = fopen('../data/data.json', 'w');
    p_print("encoding data");
    $test = json_encode($_POST);
    p_print("writing data");
    if (fwrite($fp, $test) == FALSE){
        p_print("error writing");
    };
    p_print("closing file");
    fclose($fp);
?>
