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
            <h1>Welkom bij dit spel!</h1>
            <strong>hier komt het spel te staan</strong>
        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>