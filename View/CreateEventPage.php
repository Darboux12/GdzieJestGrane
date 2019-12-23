<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/CheckBoxStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/ChatBoxStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/TopBarStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/CreateEventPageStyle.css">

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

        <a class="Ball-link" href="#Page"><img id="Ball-Image" src="../Public/Images/logo-no-writing.png"></a>


        <div class="TopBarLinks">
            <a href="#page"><i class="fas fa-globe"></i> Aktualności</a>
            <a href="#page"><i class="fas fa-map-marked-alt"></i>Oznacz miejsce</a>
            <a href="CreateEventPage.php"><i class="far fa-calendar-plus"></i>Utwórz wydarzenie</a>
        </div>


        <div class="TopBarIcons">
            <div class="UserMenu">

                <i  id="usericon" class="fas fa-user" onclick="ToggleUserMenu()"></i>

                <div id="myBubble" class="bubble">

                    <form>

                        <div class="UserProfile">

                            <img src="../Public/Images/Person1.jpg">

                            <div class="NameSeeProfile">
                                <h id="Name">Janek126p</h>
                                <h id="SeeProfile">Zobacz profil</h>
                            </div>

                            <i class="fas fa-chevron-circle-right"></i>

                        </div>

                        <div class="ProfileLinks">

                            <a href="#page">Moje wydarzenia<i class="fas fa-chevron-right"></i></a>

                            <a href="#page">Oznaczone miejsca<i class="fas fa-chevron-right"></i></a>

                            <a href="#page">Znajomi<i class="fas fa-chevron-right"></i></a>

                            <a href="#page">Znajomi<i class="fas fa-chevron-right"></i></a>

                            <a href="#page">Ustawienia<i class="fas fa-chevron-right"></i></a>

                            <a href="#page">Wyloguj<i class="fas fa-chevron-right"></i></a>

                        </div>


                    </form>
                </div>

            </div>
            <i class="fas fa-heart"></i>
            <i class="fas fa-bell"></i>
        </div>

    </div>

    <div class="CreateEventForm">

        <h>Nazwa wydarzenia</h>
        <input  type="text" placeholder="Nazwa wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Nazwa wydarzenia...'">

        <h>Data wydarzenia</h>
        <div class="EventDataInput">
            <input  type="text" placeholder="dd" onfocus="this.placeholder=''" onblur="this.placeholder='dd'">
            <input  type="text" placeholder="mm" onfocus="this.placeholder=''" onblur="this.placeholder='mm'">
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
        <div class="EventDataInput">
            <h>od</h>
            <input  type="text" placeholder="lat" onfocus="this.placeholder=''" onblur="this.placeholder='lat'">
            <h>do</h>
            <input  type="text" placeholder="lat" onfocus="this.placeholder=''" onblur="this.placeholder='lat'">
            <h>lat</h>
        </div>

        <h>Koszt:</h>
        <div class="EventDataInput">
            <input  type="text" placeholder="zł" onfocus="this.placeholder=''" onblur="this.placeholder='zł'">
            <h>zł od osoby za</h>
            <input  type="text" placeholder="godz" onfocus="this.placeholder=''" onblur="this.placeholder='godz'">
            <h>godzin gry</h>
        </div>










    </div>



    <div class="CreateEventMap">
        <img src="../Public/Images/Kamienna.png">
    </div>

    <div class="CreateEventDescription">

        <textarea rows="5" cols="50"  placeholder="Dodaj krótki opis wydarzenia..."></textarea>

    </div>








    <script>

    function openChat() {document.getElementById("chat").style.display = "grid";}
    function closeChat() {document.getElementById("chat").style.display = "none";}

    function ToggleUserMenu() {

        var bubble = document.getElementById('myBubble');

        bubble.classList.toggle("show");
    }

    window.addEventListener('click',function (event) {

        var bubble = document.getElementById('myBubble');
        var userIcon = document.getElementById('usericon');

        if(event.target != bubble && event.target != userIcon){

            if(bubble.classList.contains('show')){
                bubble.classList.remove('show');
            }
        }
    })





</script>







</body>

</html>