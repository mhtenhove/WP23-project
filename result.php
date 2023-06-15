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



<?php
include __DIR__ . '/tpl/body_end.php';
?>
