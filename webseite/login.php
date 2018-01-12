<!Doctype html>

<html lang="en">
<?php

include 'head.php'; 
?>

<body>
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle loginform">
            <h2>Login</h2>
            <form action="index.php" method="$_Post">
                <div class="row">
                        <input id="first_name" name="username" placeholder="Username" type="text">
                </div>
                <div class="row">
                        <input id="password" name="password" placeholder="Password" type="password">
                </div>
                <button class="buttonlogin" type="submit" name="action">Login<i class="material-icons right">send</i></button>
            </form>     
        </div>
    </div>
</div>
</body>
</html>