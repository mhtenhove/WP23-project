<?php
/* Header */
$page_title = 'Webprogramming Final Project'
;
$navigation = Array
(
    'active' => 'Register',
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
            <br/>
            <h1>Blackjack</h1>
            <strong>Enter a username, then click below to join</strong>


    <form action="scripts/player_counter.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="player-name" name="player-name" placeholder="Enter a username...">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Your name may only contain letters and numbers!
            </div>
            <button type="submit" name="join" class="btn btn-primary" id="join-button">Join Lobby</button>
        </div>
    </form>

    <strong>Press the button to reset the game</strong><br/>
    <button name="more-cards" class="btn btn-primary" id="reset">Fix pip</button>

        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>