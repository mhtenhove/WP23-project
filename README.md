# WP23 Final Project: Blackjack

## Authors:
* Ramon Jelsma
* Jelmer Smit
* Matthijs ten Hove

## Contents
* css
  * contains the css stylesheet (not very complex due to the use of Bootstrap)
    * style.css
* data
  * contains the JSON files with the data to start the project
  * gamestatus (current player, scores, etc is also saved in here)
    * card_values.php
    * current_player.json
    * data.json
    * scores.json
* media
  * contains the images of the cards used in the game
    * img/1.jpg till img/52.jpg
* scripts
  * contains the scripts to change the layout of the game page and load and save the current status of the game
    * choose_winner.php
    * extra_card.php
    * init.php
    * load.php
    * load_current_user.php
    * main.js
    * player_counter.php
    * player_turn.php
    * save.php
    * start_game.php
* tpl
  * contains the PHP templates for the website
    * head.php
    * body_start.php
    * body_end.php
* index.php
  * contains the registration page to register a user name, also the homepage of the website
* game.php
  * contains the actual game.
* result.php
  * displays the winner of the game
* .gitignore
  * contains the filenames of the files not needed for the project or with no need to reupload each time.

## Usage
To run the game, go to [blackjack.matthijstenhove.nl](http://blackjack.matthijstenhove.nl) or
if you use XAMPP on local machine, `localhost/WP23-project` or `localhost/`.
You will go to an index page on which you can register your username. If you encounter any problems, you can try using the reset button above it.
After filling in a valid username, you will be redirected to the game.php page.
If there are two or more players in the game you can start the game.

## Webserver
[nanolento.duckdns.org:8080](http://nanolento.duckdns.org:8080/)
(or redirected by [blackjack.matthijstenhove.nl](http://blackjack.matthijstenhove.nl))
