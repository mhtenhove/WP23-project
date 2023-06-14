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
            <h1>Welcome to Blackjack!</h1>
            <strong>Press the button to get a card</strong>
            <p id="player-num"></p>
            <form action="scripts/player_turn.php">
            <button class="btn btn-primary" id="test-btn">Click Here!</button>
            </form>
        </div>
        <div class="row">
            <h1>
                <?php
                $json_file = file_get_contents("data/data.json");
                $decoded_file = json_decode($json_file, true);

                $identifier_file = file_get_contents("data/current_player.json");
                $identifier_decode = json_decode($identifier_file, true);
                $identifier = $identifier_decode[0];

                $current_player = $decoded_file[$identifier];
                $current_player_name = $current_player['name'];

                p_print("<div><p>The current player is:</p>");
                p_print("<p id='current-player-info'>$current_player_name</p></div>");
                ?>
            </h1>



        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>