<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/SignInPageStyle.css" />
    <title>Register on website</title>
</head>

<body>

<div id="RegistrationMainContainer" class="MainContainer">

    <img id="logo" src="../Public/Images/logo.svg">
    <img id="ball" src="../Public/Images/ball.svg">

    <div id="FormAndButtons">

        <p>Zarejestruj się, aby zawsze wiedzieć gdzie jest grane!</p>

        <form id="RegistrationForm">
            <input name="Login" type="text" placeholder="Podaj login..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj login...'">
            <input name="Email" type="email" placeholder="Podaj email..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj email...'">
            <input name="Password" type="password" placeholder="Podaj hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj hasło...'">
            <input name="RepeatPassword" type="password" placeholder="Powtórz hasło..." onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło...'">
        </form>

        <input id="SignInButton" type="submit" form="RegistrationForm" value="Zarejestruj się!">

        <a href="LogInPage.php" id="LogInButton">Wiesz gdzie jest grane Zaloguj się!</a>

    </div>

</div>

</body>

</html>