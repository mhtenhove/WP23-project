const default_card_img = "media/placeholder.jpg";
var current_player = "";

function validate_name() {
    let name_input = $('#player-name');
    let cur_val = name_input.val();
    let name_regex = "^[a-zA-Z0-9]+$";
    if (cur_val.match(name_regex) && cur_val !== '' && cur_val != "none"){
        name_input.removeClass('is-invalid');
        name_input.addClass('is-valid');
        return cur_val;
    } else{
        name_input.removeClass('is-valid');
        name_input.addClass('is-invalid');
        return false;
    }
}

function player_join() {
    $('#join-button').click(function(event) {
        username = validate_name()
        sessionStorage.setItem('player-name', username);
    });
}

function switch_turn() {
    user_name = sessionStorage.getItem('player-name');
    $("#card3").css("display", "none")
    $("#card4").css("display", "none")
    $("#card5").css("display", "none")
    $.ajax({
        url: 'scripts/load_current_user.php',
        method: 'GET',
        success: function(response) {
            // response = username van speler die aan beurt is
            // user_name = opgeslagen naam in browser
            if (response == user_name) {
                // username ophalen uit current_player.json
                $.ajax({
                    url: 'scripts/player_turn.php',
                    method: 'GET',
                    success: function(response){
                        // reset kaarten
                        $(".card").attr("src", default_card_img);
                        if (response != "") {
                            alert(response);
                        }
                    },
                });
            }
        }
    });
}

function update_current_player() {
    $.ajax({
        url: "scripts/load_current_user.php",
        method: "GET",
        success: function(response){
            $("#current-player-info").html(response);
            if (response != current_player) {
                if (response == sessionStorage.getItem("player-name")) {
                    // now its your player turn
                    // so automatically run start_game
                    $.ajax({
                        url: 'scripts/start_game.php',
                        method: 'GET',
                        success: function(response){
                            if (response.endsWith("blackjack")) {
                                alert("Blackjack! You win the game!");
                                win_game();
                            }
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
                current_player = response;
            }
        }
    });
}

function player_name_display() {
    $('#player-num').text(sessionStorage.getItem('player-name'));
}



function hit() {
    $('#hit-btn').click(function() {
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
                            if (response.startsWith("bust")) {
                                alert("Bust! The turn now goes to the next player!");
                                switch_turn();
                            }
                            else if (response.startsWith("blackjack")){
                                alert("Blackjack! You win the game!")
                                win_game();
                            }
                            else {
                                new_card = response;
                                new_card_url = "media/img/" + new_card + ".jpg"
                                if ($("#card3").attr("src") != default_card_img) {
                                    //alert("card 3 is used already");
                                    if ($("#card4").attr("src") != default_card_img) {
                                        //alert("card 4 is used already");
                                        if ($("#card5").attr("src") != default_card_img) {
                                            //alert("cards are full");
                                        } else {
                                            $("#card5").css("display", "inline");
                                            $("#card5").attr("src", new_card_url);
                                        }
                                    } else {
                                        $("#card4").css("display", "inline");
                                        $("#card4").attr("src", new_card_url);
                                    }
                                } else {
                                    $("#card3").css("display", "inline");
                                    $("#card3").attr("src", new_card_url);
                                }
                            }
                        }
                    });
                }
            }
        });
    })
}

function stand(){
    $('#stand-btn').click(function(){
        switch_turn();
    });
}

function reset() {
    $("#reset").click(function() {
        $.ajax({
            url: "scripts/init.php",
            method: "GET",
            success: function() {
                alert("The game has been initialized. You can now join the lobby.")
            }
        })
    });
}


function print_user(){
    username = sessionStorage.getItem('player-name');
    alert(username);
}

function win_game() {
    $.ajax({
        url: "scripts/choose_winner.php",
        method: "GET",
        data: {
            winner: sessionStorage.getItem("player-name")
        },
        success: function() {
            
        }
    })
}

function check_game_status() {
    $.ajax({
        url: "scripts/get_status.php",
        method: "GET",
        success: function(response) {
            if (response != "none") {
                window.location.href = "result.php";
            }
        }
    });
}


function print_winner() {
    $.ajax({
        url: "scripts/get_status.php",
        method: "GET",
        success: function (response) {
            $("#winning-player").html(response)
        }
    })
}

$(function() {
    $('#player-name').keyup(function () {
        validate_name();
    });
    player_join();
    player_name_display();
    hit();
    stand();
    switch_turn();
    reset();
    // $("#inactive-player-content").hide();
    if (window.location.href.endsWith("game.php")) {
        window.setInterval(update_current_player, 1000);
        window.setInterval(check_game_status, 2000);
    }
});
