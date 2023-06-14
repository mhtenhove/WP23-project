function player_join() {
    $('#join-button').click(function(event) {
        let playername = $('#player-name').val()
        sessionStorage.setItem('player-name', playername);
    });

    // Game function
        $("#test-btn").click(function(event) {
            event.preventDefault();
            $.ajax({
                url: 'scripts/player_turn.php',
                method: 'GET',
                success: function(){
                    
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
            
        }

    });

}

function player_name_display() {
    $('#player-num').text(sessionStorage.getItem('player-name'));
}


function print_user(){
    user_name = sessionStorage.getItem('player-name');
    alert(user_name)
}

$(function() {
    player_join();
    player_name_display();
    window.setInterval(update_current_player, 1000);



});
