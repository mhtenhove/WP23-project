<?php
/* Header */
$page_title = 'Webprogramming Assignment 3'
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
            <h1>Blackjack</h1>
            <strong>Click below to join</strong>
        </div>
    </div>
    <div class="row">
        <button class="btn btn-primary" id="p1-button">Player 1 Join</button>
        <button class="btn btn-secondary" id="p2-button">Player 2 Join</button>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>