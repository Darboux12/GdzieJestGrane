<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/NewsPageStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/TopBarStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/ChatBoxStyle.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Main Page</title>

</head>


<body>

<button class="chatbox-open-button" onclick="openChat()">Chat</button>

<div id="chat" class="chat-container">

    <div class="search-container">
        <input type="text" placeholder="Szukaj" onfocus="this.placeholder = ''">
    </div>

    <div class="coversation-list"></div>

    <div class="new-message-container">
        <a href="#add"><i class="fas fa-plus-circle"></i></a>
    </div>

    <div class="chat-title">
        <span>John Doe</span>
        <button class="close-chat-button" onclick="closeChat()">X</button>
    </div>

    <div class="chat-message-list">chat-message-list</div>

    <div class="chat-form">chat-form</div>

</div>

<div class="Wrapper">

    <div class="TopBar">

        <div id="logo">
            <a  href="#Page"><img src="../Public/Images/logo-no-writing.png"></a>
        </div>

        <div class="Options">

            <a href="#page"><i class="fas fa-globe"></i>Aktualności</a>
            <a href="#page"><i class="fas fa-map-marked-alt"></i>Oznacz miejsce</a>
            <a href="CreateEventPage.php"><i class="far fa-calendar-plus"></i>Utwórz wydarzenie</a>

        </div>

        <div id="Notification">
            <a href="#page"><i class="fas fa-user"></i></a>
            <a href="#page"><i class="fas fa-heart"></i></a>
            <a href="#page"><i class="fas fa-bell"></i></a>
        </div>

    </div>

    <div class="NewsNav">

        <div class="News">

            <img alt="Person" src="../Public/Images/award.jpg ">

            <div class="NewsText">

                <h>GdzieJestGrane laureatem InnovativeApp2019</h>

                <p>Z radością pragniemy poinformować, że nasza aplikacja została wyróżniona na corocznym
                    konkursie InnovativeApp2019. Z całego serca dziękujemy wam za używanie naszej aplikacji.</p>

                <a href="#page">Dowiedz się więcej o InnovativeApp2019...</a>

            </div>

        </div>

        <div class="News">

            <img alt="Person" src="../Public/Images/Person1.jpg ">

            <div class="NewsText">

                <h>Witamy Wojtka w naszym zespole</h>

                <p>Z radością pragniemy poinformować, że do naszego zespołu dołączył Wojtek.
                    Będzie on odpowiedzialny za projektowanie szaty graficznej naszej aplikacji.
                    Mamy nadzieję, że poczujesz się u nas jak w rodzinie.</p>

                <a href="#page">Dowiedz się więcej o Wojtku...</a>

            </div>

        </div>

        <div class="News">

            <img alt="Person" src="../Public/Images/meeting.jpg">

            <div class="NewsText">

                <h>Zaproszenie na spotkanie</h>

                <p>Z przyjemnością zapraszamy wszystkich na spotkanie z naszym zespołem projektowym.
                    W czasie spotkania opowiemy wamy o projektowaniu aplikacji internetowych oraz
                    odpowiemy na wasze pytania.
                </p>

                <a href="#page">Dowiedz się więcej o szczegółach spotkania...</a>

            </div>

        </div>

        <div class="News">

            <img alt="Person" src="../Public/Images/team.jpg">

            <div class="NewsText">

                <h>GdzieJestGrane ma już 10.000 użytkowników</h>

                <p>Z radością pragniemy poinformować, że nasza aplikacja ma już 10 000 tysięcy aktywnych użytkowników.
                    Dziękujemy, że jesteście z nami!
                </p>

                <a href="#page">Dołącz do społeczności GdzieJestGrane na facebooku...</a>

            </div>

        </div>


    </div>


    <div class="RightNav">RightNav</div>

</div>







<script>
    function openChat() {document.getElementById("chat").style.display = "grid";}
    function closeChat() {document.getElementById("chat").style.display = "none";}
</script>


</body>
</html>