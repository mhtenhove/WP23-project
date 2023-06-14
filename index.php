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
            <h1>Blackjack</h1>
            <strong>Enter a username, then click below to join</strong>
        </div>
    </div>
    <form action="scripts/player_counter.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="player-name" name="player-name">
            <button type="submit" name="join" class="btn btn-primary" id="join-button">Join Lobby</button>
        </div>
    </form>

<?php
include __DIR__ . '/tpl/body_end.php';
?>