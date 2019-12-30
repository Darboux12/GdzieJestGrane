<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/checkbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/createEvent.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Create Event</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="CreateEventForm">

        <form>

            <h>Nazwa wydarzenia</h>
            <input  type="text" placeholder="Nazwa wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Nazwa wydarzenia...'">

            <h>Data wydarzenia</h>
            <div class="EventDataInput">
                <input  type="text" placeholder="dd" onfocus="this.placeholder=''" onblur="this.placeholder='dd'">
                <input  type="text" placeholder="mm" onfocus="this.placeholder=''" onblur="this.placeholder='mm'">
                <input  type="text" placeholder="yyyy" onfocus="this.placeholder=''" onblur="this.placeholder='yyyy'">
            </div>

            <h>Dyscyplina</h>
            <div id="SelectSport" class="SearchNavSelect">
                <select>
                    <option value="0">Wybierz dyscyplinę</option>
                    <option value="1">Piłka Nożna</option>
                    <option value="2">Siatkówka</option>
                    <option value="3">Koszykówka</option>
                    <option value="4">Pływanie</option>
                    <option value="5">Kajakarstwo</option>
                    <option value="6">Golf</option>
                    <option value="7">Bieganie</option>
                    <option value="8">Inne</option>
                </select>
                <i class="fas fa-caret-down"></i>
            </div>

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
                <input  type="text" placeholder='od x lat' onfocus="this.placeholder=''" onblur="this.placeholder='od x lat'">
                <input  type="text" placeholder='do y lat' onfocus="this.placeholder=''" onblur="this.placeholder='do y lat'">
            </div>

            <h>Koszt:</h>
            <div class="EventDataInput">
                <input  type="text" placeholder='zł. od osoby' onfocus="this.placeholder=''" onblur="this.placeholder='zł. od osoby'">
                <h>za</h>
                <input  type="text" placeholder='godz. gry' onfocus="this.placeholder=''" onblur="this.placeholder='godz. gry'">
            </div>

        </form>

    </div>

    <div class="CreateEventMap">
        <img src="../../Public/Images/Kamienna.png">
        <input  type="text" placeholder="Wybierz miejsce wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Wybierz miejsce wydarzenia...'">
    </div>

    <div class="CreateEventDescription">

        <textarea rows="5" cols="50"  placeholder="Dodaj krótki opis wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Dodaj krótki opis wydarzenia...'"></textarea>

    </div>

</div>

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


    function ToggleMobileMenuBar() {

        var bubble = document.getElementById('Mobile-Drop-Menu-Bar');

        bubble.classList.toggle("show");
    }

    function ToggleMobileMenuUser() {

        var bubble = document.getElementById('Mobile-Drop-Menu-User');

        bubble.classList.toggle("show");
    }

    function ToggleMobileMenuSearch() {

        var bubble = document.getElementById('Mobile-Drop-Menu-Search');

        bubble.classList.toggle("show");
    }


    var isButtonOneSet = true;

    function MobileChooseEvent() {

        btn1 = document.getElementById('button1');
        btn2 = document.getElementById('button2');

        if(isButtonOneSet){
            btn1.style.background = 'transparent';
            btn2.style.background = 'white';
            isButtonOneSet = false;
        } else {
            btn2.style.background = 'transparent';
            btn1.style.background = 'white';
            isButtonOneSet = true;
        }











    }


</script>







</body>

</html>