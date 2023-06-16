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
        'Game' => 'game.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

    <div class="row">
        <div class="col-md-12">
            <h1>How to play?</h1>
            <p></p>
        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>