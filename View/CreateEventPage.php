<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/CreateEventPageStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/CheckBoxStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/ChatBoxStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/TopBarStyle.css">


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Create Event</title>

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
            <a  href="MainPage.php"><img src="../Public/Images/logo-no-writing.png"></a>
        </div>

        <div class="Options">

            <a href="#page"><i class="fas fa-globe"></i>Aktualności</a>
            <a href="#page"><i class="fas fa-map-marked-alt"></i>Oznacz miejsce</a>
            <a href="#page"><i class="far fa-calendar-plus"></i>Utwórz wydarzenie</a>

        </div>

        <div id="Notification">
            <a href="#page"><i class="fas fa-user"></i></a>
            <a href="#page"><i class="fas fa-heart"></i></a>
            <a href="#page"><i class="fas fa-bell"></i></a>
        </div>

    </div>

    <div class="CreateEventForm">

        <h>Nazwa wydarzenia</h>
        <input  type="text" placeholder="Nazwa wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Nazwa wydarzenia...'">

        <h>Data wydarzenia</h>
        <div id="EventDataInput">
            <input  type="text" placeholder="dd" onfocus="this.placeholder=''" onblur="this.placeholder='dd'">
            <input  type="text" placeholder="mm" onfocus="this.placeholder=''" onblur="this.placeholder='mmm'">
            <input  type="text" placeholder="yyyy" onfocus="this.placeholder=''" onblur="this.placeholder='yyyy'">
        </div>

        <h>Dyscyplina</h>
        <input  type="text" placeholder="Dyscyplina..." onfocus="this.placeholder=''" onblur="this.placeholder='Dyscyplina...'">

        <h>Liczba osób</h>
        <input  type="number" placeholder="Liczba osób..." onfocus="this.placeholder=''" onblur="this.placeholder='Liczba osób...'">

        <div class="CheckBox">

            <h>Szukam:</h>

            <div class="Checkbox-options">

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <h>Mężczyzn</h>
                    </label>

                </div>

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <h>Kobiet</h>
                    </label>

                </div>


                <div class="Checkbox-option-container">

                    <label id="last-box" class="Checkbox-option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <h>Dowolnie</h>
                    </label>

                </div>

            </div>

        </div>

        <h>Szukam osób w wieku:</h>
        <div id="EventDataInput">
            <h>od</h>
            <input  type="text" placeholder="lat" onfocus="this.placeholder=''" onblur="this.placeholder='lat'">
            <h>do</h>
            <input  type="text" placeholder="lat" onfocus="this.placeholder=''" onblur="this.placeholder='lat'">
            <h>lat</h>
        </div>

        <h>Koszt:</h>
        <div id="EventDataInput">
            <input  type="text" placeholder="zł" onfocus="this.placeholder=''" onblur="this.placeholder='zł'">
            <h>zł od osoby za</h>
            <input  type="text" placeholder="zł" onfocus="this.placeholder=''" onblur="this.placeholder='zł'">
            <h>godzin gry</h>
        </div>










    </div>


    <div class="CreateEventMap">CreateEventMap</div>
    <div class="CreateEventDescription">CreateEventDescription</div>










<script>
    function openChat() {document.getElementById("chat").style.display = "grid";}
    function closeChat() {document.getElementById("chat").style.display = "none";}



</script>


</body>

</html>