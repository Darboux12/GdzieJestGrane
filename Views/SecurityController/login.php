<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/GeneralStyle.css" />
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/LogInPageStyle.css" />
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

        <p>Zaloguj się i nie przegap żadnego meczu!</p>

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
            <input name="email" type="email" placeholder="Podaj email..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj email...'">
            <input name="password" type="password" placeholder="Podaj hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj hasło...'">
            <input id="LogInButton" type="submit"  value="Zaloguj się!">
        </form>

        <a href="../SignInPage.php" id="SignInButton">Nie wiesz gdzie jest grane? Zarejestruj się!</a>

    </div>

</div>

</body>
</html>

