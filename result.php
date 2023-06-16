<?php
/* Header */
$page_title = 'Webprogramming Final Assignment'
;
$navigation = Array
(
    'active' => 'Game',
    'items' => Array (
        'Register' => 'index.php',
        'Rules' => 'rules.php',
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>
    <script defer>
        print_winner();
    </script>

    <div class="row">
        <div class="col-md-12">
            <br/>
            <h1>And the winner is...</h1>
            <strong id="winning-player"></strong>
        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';

?>
