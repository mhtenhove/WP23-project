<?php
/* Header */
$page_title = 'Webprogramming Final Assignment'
;
$navigation = Array
(
    'active' => 'Rules',
    'items' => Array (
        'Register' => 'index.php',
        'Rules' => 'rules.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

    <div class="row">
        <div class="col-md-12">
            <h1>How to play?</h1>
            <p>Blackjack is a game with many different iterations, and everyone has their own preferred version. The rules of our version are as follows:</p>
            <ol>
                <li>The object of the game is to reach a score as close to 21 as possible, without going over</li>
                <li>At the start of their turn, each player receives two cards. They can choose to take an additional card (hit), or end their turn (stand).</li>
                <li>Each player only gets one turn. They may hit up to three times during their turn, giving they a maximum hand of 5 cards.</li>
                <li>If a player's score exceeds 21, they go bust and immediately lose. The turn then advances to the next player.</li>
                <li>If a player gets a score of exactly 21, they immediately win. The game ends regardless of whether every player took their turn already.</li>
                <li>Number cards are worth their face value. Face cards are worth 10 points each. Aces are worth 11 points</li>
            </ol>
            <p>Note: In many versions of blackjack, the value of the ace can fluctuate depending on the player's hand. This is not the case in our version.</p>
            <h2>Good luck, and have fun!</h2>
        </div>
    </div>


<?php
include __DIR__ . '/tpl/body_end.php';
?>