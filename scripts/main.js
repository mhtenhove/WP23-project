function player_join() {
    $('#join-button').click(function(event) {
        let playername = $('#player-name').val()
        sessionStorage.setItem('player-name', playername);
    });
    
    // Game function
//     $("#test-btn").click(function(event) {
//         $.ajax({
//             url: '../scripts/save.php',
//             method: 'POST',
//             data: { 'player-name': sessionStorage.getItem('player-name') },
//             success: function(){
//                 load_player_info();
//             },
//         });
//     });
// }
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

// function load_player_info() {
//     $.ajax({
//         url: '../scripts/load.php',
//         method: 'GET',
//         data: { 'attr': 'name' },
//         success: function(response){
//             $("#current-player-info").html(response);
//         },
//     });
// }

function update_current_player() {
    $.ajax({
        url: "../scripts/load_current_user.php",
        method: "GET",
        success: function(){
            alert("test")
        }

    })

}

function player_name_display() {
    $('#player-num').text(sessionStorage.getItem('player-name'));
}

$(function() {
    player_join();
    player_name_display();
    // if (window.location.pathname == '/game.php') {
        // window.setInterval(load_player_info, 1000);
    // }
});
