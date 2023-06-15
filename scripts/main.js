function player_join() {
    $('#join-button').click(function(event) {
        let playername = $('#player-name').val();
        sessionStorage.setItem('player-name', playername);
    });

    // Game function
    $("#test-btn").click(function(event) {
        event.preventDefault();
        $.ajax({
            url: 'scripts/player_turn.php',
            method: 'GET',
            success: function(){
                // empty
            },
        });
    });
    $("#start-turn-btn").click(function(event) {
        event.preventDefault();
        $.ajax({
            url: 'scripts/start_game.php',
            method: 'GET',
            success: function(response){
                card1 = response.split(" ")[0];
                card2 = response.split(" ")[1];
                card1_url = "media/img/" + card1 + ".jpg"
                card2_url = "media/img/" + card2 + ".jpg"
                //$("#card-id").html(card1_url + " " +  card2)
                $("#card1").attr("src", card1_url);
                $("#card2").attr("src", card2_url);
            }
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


function more_cards() {
    $('#more-cards').click(function(event) {
        $.ajax({
            url: "scripts/extra_card.php",
            method: "GET",
            success: function(response) {
                alert("succes");
            }
        })
    })
}



function print_user(){
    user_name = sessionStorage.getItem('player-name');
    alert(user_name);
}

$(function() {
    player_join();
    player_name_display();
    more_cards();
    window.setInterval(update_current_player, 1000);
});
