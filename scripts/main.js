var default_card_img = "media/placeholder.jpg";

function player_join() {
    $('#join-button').click(function(event) {

        let name_input = $('#player-name');
        let cur_val = name_input.val();
        let name_regex = "^[a-zA-Z0-9]+$";
        if (cur_val.match(name_regex) && cur_val !== ''){
            name_input.removeClass('is-invalid');
            name_input.addClass('is-valid');
            sessionStorage.setItem('player-name', cur_val);
            return true;
        } else{
            name_input.removeClass('is-valid');
            name_input.addClass('is-invalid');
            return false;
        }
    });

    // Game function
    $("#test-btn").click(function(event) {
        event.preventDefault();
        current_user_name = "";
        user_name = sessionStorage.getItem('player-name');
        $.ajax({
            url: 'scripts/load_current_user.php',
            method: 'GET',
            success: function(response) {
                current_user_name = response;
                if (current_user_name == user_name) {
                    // username ophalen uit current_player.json
                    $.ajax({
                        url: 'scripts/player_turn.php',
                        method: 'GET',
                        success: function(){
                            $(".card").attr("src", default_card_img);
                        },
                    });
                }
                
            }
        });
        
    });
    $("#start-turn-btn").click(function(event) {
        event.preventDefault();
        current_user_name = "";
        user_name = sessionStorage.getItem('player-name');
        $.ajax({
            url: 'scripts/load_current_user.php',
            method: 'GET',
            success: function(response) {
                current_user_name = response;
                if (current_user_name == user_name) {
                    // username ophalen uit current_player.json
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
                }
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
        event.preventDefault();
        current_user_name = "";
        user_name = sessionStorage.getItem('player-name');
        $.ajax({
            url: 'scripts/load_current_user.php',
            method: 'GET',
            success: function(response) {
                current_user_name = response;
                if (current_user_name == user_name) {
                    // username ophalen uit current_player.json
                    $.ajax({
                        url: "scripts/extra_card.php",
                        method: "GET",
                        success: function(response) {
                        new_card = response;
                        new_card_url = "media/img/" + new_card + ".jpg"
                        if ($("#card3").attr("src") != default_card_img) {
                            //alert("card 3 is used already");
                            if ($("#card4").attr("src") != default_card_img) {
                                //alert("card 4 is used already");
                                if ($("#card5").attr("src") != default_card_img) {
                                    //alert("cards are full");
                                } else {
                                    $("#card5").attr("src", new_card_url);
                                }
                            } else {
                                $("#card4").attr("src", new_card_url);
                            }
                        } else {
                            $("#card3").attr("src", new_card_url);
                        }
                        }
                    });
                }
            }
        });
        
    })
}



function print_user(){
    username = sessionStorage.getItem('player-name');
    alert(username);
}

//current way of getting player name is placeholder, should be changed when choose_winner.php functions.
function winner_declared() {
    username = sessionStorage.getItem('player-name')
    $('#winning-player').textContent(username);
}

$(function() {
    player_join();
    player_name_display();
    more_cards();
    $("#inactive-player-content").hide();
    window.setInterval(update_current_player, 1000);
});
