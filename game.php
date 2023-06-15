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

            <div id="active-player-content">
                <form action="scripts/player_turn.php">
                        <button name="test-btn" class="btn btn-primary" id="test-btn">Switch Turn!</button>
                </form>

                <strong>Press the button to get a card</strong><br/>
                <button name="more-cards" class="btn btn-primary" id="more-cards">Hit Me!</button>
                <br>
                <strong>Press the button to start the game</strong><br/>
                <button name="start-turn-btn" class="btn btn-primary" id="start-turn-btn">Start turn</button>
            </div>

            <div id="inactive-player-content">
                <p>It is not your turn yet</p>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div id="card-id">
                        <img src="media/placeholder.jpg" id="card1" class="card" width="150"/>
                        <img src="media/placeholder.jpg" id="card2" class="card" width="150"/>
                        <img src="media/placeholder.jpg" id="card3" class="card" width="150"/>
                        <img src="media/placeholder.jpg" id="card4" class="card" width="150"/>
                        <img src="media/placeholder.jpg" id="card5" class="card" width="150"/>

                    </div>
                </div>
            </div>


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
