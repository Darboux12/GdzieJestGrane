<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css" />
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/signIn.css" />
    <link rel="icon" href="../../Public/Images/website_icon.png">
    <title>Sign in</title>
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

        <p>Sign in and do not miss any game!</p>

        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>

        <form id="LogInForm" action="?page=signin" method="POST">

            <div class="Column">
                <input name="login" type="text" placeholder="Podaj login..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj login...'">
                <input name="email" type="text" placeholder="Podaj email..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj email...'">
                <input name="password" type="password" placeholder="Podaj hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj hasło...'">
                <input name="repeatpassword" type="password" placeholder="Powtórz hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło...'">
            </div>

            <div id="RightColumn" class="Column">
                <input name="age" type="text" placeholder="Podaj wiek..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj wiek...'">
                <input name="province" type="text" placeholder="Podaj województwo..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj województwo...'">
                <input name="street" type="text" placeholder="Podaj ulicę..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj ulicę...'">
                <input name="number" type="text" placeholder="Podaj numer mieszkania..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj numer mieszkania...'">
            </div>
        </form>

        <input id="LogInButton" type="submit" form="LogInForm" value="Sign in!">

        <a href="?page=login" id="SignInButton">Know what's playing on? Log in!</a>

    </div>

</div>

</body>

</html>

