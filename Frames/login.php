<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" >
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>
        <div id="loginTitle">
            <h3> Login</h3>
        </div>
        <form action="" method="post">
            <div class="parent">
                <div class="items">
                    <p> Username</p>
                    <input type="text" class="in" name="Username" aria-label="username">
                </div>
                <div class="items">
                    <p> Password</p>
                    <input type="password" class="in" name="Password" aria-label="password">
                </div>
            </div>
            <div class="parent">
                <div class="items">
                    <input type="submit" name="login" value="login">
                </div>

            </div>
        </form>
        
    </body>

</html>

<?php
    $GLOBALS['con'] = new mysqli($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['db']);

    if(!$GLOBALS['con'] -> connect_error){
        die("no connection");
    }

    if(isset($_POST['login']) && isset($_POST['Username']) && isset($_POST['password'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $string = "select password from user where user == ''".$_POST['Username']."'';";
        if (mysqli_query($GLOBALS['con'], $string)[0] == $_POST['Password']){
            $globals['userID'] = mysqli_query($GLOBALS['con'], "select ID from user where user == $username and where password == $password;");
            echo $GLOBALS['userID'];
        }
    }
    ?>
