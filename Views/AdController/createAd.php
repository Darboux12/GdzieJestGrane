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
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/SelectField.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript" src="../../Public/JS/createAd.js"></script>

    <title>Create Event</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="CreateEventForm">

        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>

        <form id="EventForm" action="?page=createAd" method="POST" enctype="multipart/form-data">

            <h>Nazwa wydarzenia</h>
            <input  name="title" type="text" placeholder="Nazwa wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Nazwa wydarzenia...'">

            <h>Data wydarzenia</h>
            <input  name="date" type="date">

            <h>Lokalizacja</h>
            <input  name="city" type="text"  placeholder="Miasto..." onfocus="this.placeholder=''" onblur="this.placeholder='Miasto...'">
            <input  name="postal" type="text" placeholder="Kod pocztowy..." onfocus="this.placeholder=''" onblur="this.placeholder='Kod pocztowy...'">
            <input  name="street" type="text"  placeholder="Ulica..." onfocus="this.placeholder=''" onblur="this.placeholder='Ulica...'">
            <input  name="number" type="number" placeholder="Numer..." onfocus="this.placeholder=''" onblur="this.placeholder='Numer...'">

            <h>Dyscyplina</h>
            <div id="SelectSport" class="SearchNavSelect">
                <select name="discipline">
                    <option value="0">Wybierz dyscyplinę</option>
                    <option value="football">Piłka Nożna</option>
                    <option value="volleyball">Siatkówka</option>
                    <option value="basketball">Koszykówka</option>
                    <option value="swimming">Pływanie</option>
                    <option value="canoeing ">Kajakarstwo</option>
                    <option value="golf">Golf</option>
                    <option value="running">Bieganie</option>
                    <option value="other">Inne</option>
                </select>
                <i class="fas fa-caret-down"></i>
            </div>

            <h>Szukana liczba osób</h>
            <input name="pplnumber" type="number" placeholder="Liczba osób..." onfocus="this.placeholder=''" onblur="this.placeholder='Liczba osób...'">

            <div class="CheckBox">

                <h>Szukam:</h>

                <div class="Checkbox-options">

                    <div class="Checkbox-option-container">

                        <label class="Checkbox-option">
                            <input form="EventForm" name="gender" type="checkbox" value="male">
                            <span class="checkmark"></span>
                            <h>Mężczyzn</h>
                        </label>

                    </div>

                    <div class="Checkbox-option-container">

                        <label class="Checkbox-option">
                            <input name="gender" type="checkbox" value="female">
                            <span class="checkmark"></span>
                            <h>Kobiet</h>
                        </label>

                    </div>


                    <div class="Checkbox-option-container">

                        <label id="last-box" class="Checkbox-option">
                            <input name="gender" type="checkbox" value="all">
                            <span class="checkmark"></span>
                            <h>Dowolnie</h>
                        </label>

                    </div>

                </div>

            </div>

            <h>Szukam osób w wieku:</h>
            <div class="EventDataInput">
                <input name="min_age" type="number" placeholder='od x lat' onfocus="this.placeholder=''" onblur="this.placeholder='od x lat'">
                <input name="max_age" type="number" placeholder='do y lat' onfocus="this.placeholder=''" onblur="this.placeholder='do y lat'">
            </div>

            <h>Koszt:</h>
            <div class="EventDataInput">
                <input  name="min_price" type="number" placeholder='zł. od osoby' onfocus="this.placeholder=''" onblur="this.placeholder='zł. od osoby'">
                <h>za</h>
                <input  name="max_price" type="number" placeholder='godz. gry' onfocus="this.placeholder=''" onblur="this.placeholder='godz. gry'">
            </div>

        </form>

    </div>

    <div class="CreateEventMap">

        <div id="upload" class="image-upload">

            <h>Dodaj zdjęcie...</h>

            <label for="image">
                <img src="http://goo.gl/pB9rpQ"/>
            </label>
            <input name="image" id="image" form="EventForm" type="file" onchange="readURL(this);" />
        </div>

        <img id="blah" src="../../Public/Images/Blank.png" alt="your image" />

    </div>

    <div class="CreateEventDescription">

        <textarea id="description" name="description" rows="5" cols="50"  form="EventForm" placeholder="Dodaj krótki opis wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Dodaj krótki opis wydarzenia...'"></textarea>

    </div>

    <input id="FormSubmit" type="submit" form="EventForm" value="Stwórz wydarzenie">



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












</body>

</html>