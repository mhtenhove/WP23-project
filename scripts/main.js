function player_join() {
    $('#p1-button').click(function(event) {
        player1 = 'Player 1';
        sessionStorage.setItem('player', player1);
        window.location.href = 'game.php'
    });

    $('#p2-button').click(function(event) {
        player2 = 'Player 2';
        sessionStorage.setItem('player', player2);
        window.location.href = 'game.php'
    });
}

function player_num_display() {
    $('#player-num').text(sessionStorage.getItem('player'));
}

$(function() {
    player_join();
    player_num_display();
});