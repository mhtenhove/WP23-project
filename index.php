<?php
/* Header */
$page_title = 'Webprogramming Final Project'
;
$navigation = Array
(
    'active' => 'Register',
    'items' => Array (
        'Register' => 'index.php',
        'Rules' => 'rules.php',
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
            <h1>Welcome to Blackjack!</h1>

            <br/>

            <div class="box-red-background">
                <strong>Press this button only if:</strong><br/>
                <ul>
                    <li>You are the first person joining the session</li>
                    <li>There are still other people in the session, and you want to remove them</li>
                </ul>
                <button name="more-cards" class="btn btn-primary" id="reset">Initialize game</button>
            </div>

            <br/>

            <div class="box-blue-background">
                <strong>Enter a username, then click below to join:</strong>
                <form action="scripts/player_counter.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="player-name" name="player-name" placeholder="Enter a username...">
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Your name may only contain letters and numbers!</div><br/>
                    <button type="submit" name="join" class="btn btn-primary" id="join-button">Join Lobby</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>