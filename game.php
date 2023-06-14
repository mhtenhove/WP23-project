<?php
/* Header */
$page_title = 'Webprogramming Final Assignment'
;
$navigation = Array
(
    'active' => 'Game',
    'items' => Array (
        'Register' => 'index.php',
        'Game' => 'game.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

    <div class="pd-40"></div>
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to Blackjack!</h1>
            <strong>Press the button if you want to finish your turn</strong>
            <p id="player-num"></p>

            <?php
            $json_file = file_get_contents("data/data.json");
            $players = json_decode($json_file, true);

            foreach ($players as $key => $value) {
                $player_status = $value['status'];
                if ($player_status == 'active') {
                    p_print('<form action="scripts/player_turn.php">
                    <button name="test-btn" class="btn btn-primary" id="test-btn">Switch turn</button>
                    </form>

                    <strong>Press the button to get a card</strong><br/>
                    <button name="more-cards" class="btn btn-primary" id="more-cards">Give extra card!</button>');
                }

                else {
                    p_print('<p>It is not your turn yet</p>');
                }
            }
            ?>
        </div>
        <div class="row">
            <h1>
                <?php
                p_print("<div><p>The current player is:</p>");
                p_print("<p id='current-player-info'></p></div>");
                ?>
            </h1>

<!--            <img src="/media/img/1.jpg"/>-->


        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>
