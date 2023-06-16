<?php
/* Header */
$page_title = 'Webprogramming Final Project';
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
            <br/>
            <h1>Welcome to Blackjack!</h1>

            <div id="username" class="box-red-background">
                <table class="table">
                    <tr>
                        <td>
                            <p><b>Your username:</b></p>
                        </td>
                        <td>
                            <p id="player-num"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>The current user is:</b></p>
                        </td>
                        <td>
                            <p id='current-player-info'></p></div>
                        </td>
                    </tr>
                </table>
            </div>

            <br/>

            <div id="buttons">
                <strong>Press the button if you want to finish your turn</strong>
                <br/>
                <button name="test-btn" class="btn btn-primary" id="test-btn">Switch Turn!</button>
                <br/>
                <strong>Press the button to get a card</strong><br/>
                <button name="more-cards" class="btn btn-primary" id="more-cards">Hit Me!</button>
                <br/>
                <strong>Press the button to start the game</strong><br/>
                <button name="start-turn-btn" class="btn btn-primary" id="start-turn-btn">Start turn</button>
                <br/>
            </div>

            <h2>Your hand:</h2>

            <br/>

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


<?php
include __DIR__ . '/tpl/body_end.php';
?>
