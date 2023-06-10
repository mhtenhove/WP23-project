<?php
/* Header */
$page_title = 'Webprogramming Final Assignment'
;
$navigation = Array
(
    'active' => 'Index',
    'items' => Array (
        'Index' => '/WP23-project/index.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

    <div class="pd-40"></div>
    <div class="row">
        <div class="col-md-12">
            <h1>Welkom bij dit spel!</h1>
            <strong>hier komt het spel te staan</strong>
            <p id="player-num"></p>
            <button class="btn btn-primary" id="test-btn">Click Here!</button>
        </div>
        <div class="row">
            <h1>
                <?php
                $json_file = file_get_contents("data/data.json");
                $decoded_file = json_decode($json_file, true);
                $player_clicked = $decoded_file['player'];
                p_print("The last player who clicked the button is:");
                p_print( $player_clicked)
                ?>
            </h1>
        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>