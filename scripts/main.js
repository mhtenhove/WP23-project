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
    
    // Game function
    $("#test-btn").click(function(event) {
        event.preventDefault();
        $.ajax({
            url: '/scripts/save.php',
            method: 'POST',
            data: { 'player': sessionStorage.getItem('player') },
            success: function(){
                loadPlayerInfo();
            },
        });
    });
}

function loadPlayerInfo() {
    $.ajax({
        url: '/scripts/load.php',
        method: 'GET',
        data: { 'attr': 'player' },
        success: function(response){
            $("#lastPlayerInfo").html(response);
        },
    });
}

function player_num_display() {
    $('#player-num').text(sessionStorage.getItem('player'));
}

$(function() {
    player_join();
    player_num_display();
    window.setInterval(loadPlayerInfo, 1000);
});
