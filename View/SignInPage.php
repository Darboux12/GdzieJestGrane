<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/GeneralStyle.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/SignInPageStyle.css" />
    <title>Register on website</title>
</head>

<body>

<div id="RegistrationMainContainer" class="MainContainer">

    <img id="logo" src="../Public/Images/logo.svg">
    <img id="ball" src="../Public/Images/ball.svg">

    <div id="FormAndButtons">

        <p>Zarejestruj się, aby zawsze wiedzieć gdzie jest grane!</p>

        <form id="RegistrationForm">
            <input name="Login" type="text" placeholder="Podaj login">
            <input name="Email" type="email" placeholder="Podaj email">
            <input name="Password" type="password" placeholder="Podaj hasło">
            <input name="RepeatPassword" type="password" placeholder="Repeat password">
        </form>

        <input id="SignInButton" type="submit" form="RegistrationForm" value="Zarejestruj się!">

        <input id="LogInButton" type="button" onclick="" value="Wiesz gdzie jest grane Zaloguj się!">

    </div>

</div>

</body>

</html>