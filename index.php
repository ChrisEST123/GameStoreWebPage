<?php
include_once('database.php');
$query="select title, image from games";
$result=mysql_query($query)
?>

<!DOCTYPE html>
<!--1906001-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Vapor Games</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>

    <body>
        <header>
            <a href="index.html"><img src="unknown.png" style="width:8em; height:4em;" /></a>
        </header>
        <nav>
            <a class="ilogin" href="login.php">Sign in</a>
            <a class="iwishlist" href="wishlist.html">Wishlist</a>
            <a class="iuser" href="user.html">User List</a>
            <!--Make Wishlist tab also not show itself if the user hasn't logged in-->
            <!--PHP code so when a user is logged in, it shows a log out option-->   
        </nav>
        <main>
            <aside id="gamechoice">
                <br />
                <a href="newgame.html" type="submit"><h4>Add a new game</h4></a>
                <label for="filter">Want a specific genre? </label>
                <select id="filter" name="filter">
                    <option value="all">No filter</option>
                    <option value="rpg">Role-Playing Game</option>
                    <option value="str">Strategy</option>
                    <option value="fps">First Person Shooter</option>
                    <option value="sim">Simulation game</option>
                    <option value="???">Other</option>
                </select>
                <br><br />
                <label for="search">Search for your game: </label>
                <input id="search" name="search" type="text" list="game-choices" />
                <datalist id="game-choices">
                    <!--Foreach loop time-->
                    <option value="Civilization V"></option>
                    <option value="Shadowrun: Dragonfall - Director's Cut"></option>
                    <option value="Shadowrun Returns"></option>
                    <option value="Euro Truck Simulator 2"></option>
                    <option value="Train Simulator 2020"></option>
                    <option value="Cave Story+"></option>
                </datalist>

            </aside>
            <table class="indextable">
                <tr>
                    <th colspan="2"><h2 class="center">Games</h2></th>
                </tr>
            </table>
            <!--foreach loop for the games but also if loop for the pictures(if id of Civ 5 then img of Civ V and so on)-->
            <table class="indextable">
                <thead>
                    <tr>
                        <th><h2 class="center">Games</h2></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><a href="gamepage.html">Sid Meier's Civilization V</a></th>
                        <td><img src="https://steam.cryotank.net/wp-content/gallery/civilization5/Civilization-V-02.png" style="width:20em; height:8em;"></td>
                    </tr>
                    <tr>
                        <th>Shadowrun: Dragonfall - Director's Cut</th>
                        <td><img src="https://steamcdn-a.akamaihd.net/steam/apps/300550/header.jpg?t=1536157123" style="width:20em; height:8em;"></td>
                    </tr>
                    <tr>
                        <th>Shadowrun: Returns</th>
                        <td><img src="https://steam.cryotank.net/wp-content/gallery/shadowrunreturns/Shadowrun-Returns-02.png" style="width:20em; height:8em;"></td>
                    </tr>
                    <tr>
                        <th>Euro Truck Simulator 2</th>
                        <td><img src="https://steamcdn-a.akamaihd.net/steam/apps/227300/header.jpg?t=1580390416" style="width:20em; height:8em;"></td>
                    </tr>
                    <tr>
                        <th>Train Simulator 2020</th>
                        <td><img src="https://steamcdn-a.akamaihd.net/steam/apps/24010/header.jpg?t=1583508299" style="width:20em; height:8em;"></td>
                    </tr>
                    <tr>
                        <th>Cave Story +</th>
                        <td><img src="https://steamcdn-a.akamaihd.net/steam/apps/200900/header.jpg?t=1488657143" style="width:20em; height:8em;"></td>
                    </tr>
                </tbody>
            </table>
        </main>

    </body>
    <br>
    <footer>

        <h5>Author: Chris Kristjan Kivaste | Contact:ck19702@essex.ac.uk</h5>

        <a href="login.html">Sign in</a>
        <a href="wishlist.html">Wishlist</a>
        <!--PHP code so when a user is logged in, it shows a log out option-->

    </footer>

</html>