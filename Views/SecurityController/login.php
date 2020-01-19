<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css" />
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/logIn.css" />
    <link rel="icon" href="../../Public/Images/website_icon.png">
    <title>Log in</title>


</head>

<body>

<div class="MainContainer">

    <div class="Logo">

             <img class="LogoImage" src="../../Public/Images/logo-no-writing.png">

            <div class="LogoHeaders">
                <h class="LogoHeader1">GdzieJestGrane</h>
                <h class="LogoHeader2">Do zobaczenia na boisku</h>
            </div>

        </div>

    <div id="FormAndButtons">

        <p>Log in and do not miss any game!</p>

        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>

        <form id="LogInForm" action="?page=login" method="POST" >
            <input name="email" type="text" placeholder="Enter your email..." onfocus="this.placeholder=''" onblur="this.placeholder='Enter your email...'">
            <input name="password" type="password" placeholder="Enter your password..." onfocus="this.placeholder=''" onblur="this.placeholder='Enter your password...'">
            <input id="LogInButton" type="submit"  value="Zaloguj się!">
        </form>

        <a href="?page=signin" id="SignInButton">Don't know where's playing on? Sign in!</a>

    </div>

</div>

</body>
</html>

