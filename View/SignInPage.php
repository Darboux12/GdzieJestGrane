<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/LogInPageStyle.css" />
    <title>Log in</title>
</head>
<body>

<div class="MainContainer">

    <div class="Logo">

        <img class="LogoImage" src="../Public/Images/logo-no-writing.png">

        <div class="LogoHeaders">
            <h class="LogoHeader1">GdzieJestGrane</h>
            <h class="LogoHeader2">Do zobaczenia na boisku</h>
        </div>

    </div>

    <div id="FormAndButtons">

        <p>Zaloguj się i nie przegap żadnego meczu!</p>

        <form id="LogInForm">
            <input name="Login" type="text" placeholder="Podaj login..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj login...'">
            <input name="Email" type="email" placeholder="Podaj email..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj email...'">
            <input name="Password" type="password" placeholder="Podaj hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj hasło...'">
            <input name="RepeatPassword" type="password" placeholder="Powtórz hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło...'">
        </form>

        <input id="LogInButton" type="submit" form="FormAndButtons" value="Zarejestruj się!">

        <a href="SignInPage.php" id="SignInButton">Wiesz gdzie jest grane? Zaloguj się!</a>





    </div>

</div>

</body>
</html>

