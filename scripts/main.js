function player_join() {
    $('#join-button').click(function(event) {
        let playername = $('#player-name').val()
        sessionStorage.setItem('player-name', playername);
    });
    
    // Game function v.2
    $("#test-btn").click(function(event) {
        event.preventDefault();
        $.ajax({
            url: '../scripts/player_turn.php',
            method: 'GET',
            success: function(){
                //alert("dfsaffd");
            },
        });
    });
}


function update_current_player() {
    $.ajax({
        url: "scripts/load_current_user.php",
        method: "GET",
        success: function(response){
            $("#current-player-info").html(response);
            //alert(response);
        }

    });

}

function player_name_display() {
    $('#player-num').text(sessionStorage.getItem('player-name'));
}

$(function() {
    player_join();
    player_name_display();
    if (window.location.pathname == '/game.php') {
        window.setInterval(update_current_player, 1000);
    }
});
