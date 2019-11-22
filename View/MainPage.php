<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/MainPageStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/TopBarStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/ChatBoxStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/CheckBoxStyle.css">


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

    <div class="SearchNav">

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

        <div id="SelectState" class=SearchNavSelect>
            <select>
                <option value="0">Wybierz województwo</option>
                <option value="1">Dolnosląskie</option>
                <option value="2">Kujawsko-pomorskie</option>
                <option value="3">Lubelskie</option>
                <option value="4">Lubuskie</option>
                <option value="5">Łódzkie</option>
                <option value="6">Małopolskie</option>
                <option value="7">Mazowieckie</option>
                <option value="8">Opolskie</option>
                <option value="9">Podkarpackie</option>
                <option value="10">Podlaskie</option>
                <option value="11">Warmińsko-mazurskie</option>
                <option value="12">Wielkopolskie</option>
                <option value="13">Zachodnio-pomorskie</option>
            </select>
            <i class="fas fa-caret-down"></i>
        </div>

        <div class="SearchBar-Searchbox">
            <input  type="text" placeholder="Search..." onfocus="this.placeholder=''" onblur="this.placeholder='Search...'" class="search-box-input">
            <button class="search-box-button"><i class="fas fa-search"></i></button>
        </div>

        <div class="SearchBar-SelectNumber">

            <h>Podaj cenę:</h>

            <div class="SelectInputs">
                <input id="from" type="number" placeholder="od..." onfocus="this.placeholder=''" onblur="this.placeholder='od...'" min="0" step="any" />
                <input id="to"  type="number" placeholder="do..." onfocus="this.placeholder=''" onblur="this.placeholder='do...'" min="0" step="any" />
            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Podaj liczbę osób:</h>

            <div class="SelectInputs">
                <input id="NumebrOfPeopleInput" type="number" placeholder="Liczba osób..." onfocus="this.placeholder=''" onblur="this.placeholder='Liczba osób...'" min="0" step="any" />
            </div>

        </div>

        <div class="CheckBox">

            <h>Szukam:</h>

            <div class="Checkbox-options">

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <h>Boiska</h>
                    </label>

                </div>

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <h>Hali</h>
                    </label>

                </div>


                <div class="Checkbox-option-container">

                    <label id="last-box" class="Checkbox-option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <h>Terenu</h>
                    </label>

                </div>


            </div>




        </div>


    </div>

    <div class="RightNav">RightNav</div>

    <div class="MainContent">

        <div class="Publication">

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>

                <div id="EventPeopleNumberElemnt">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>









        </div>
        <div class="Publication">

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>

                <div id="EventPeopleNumberElemnt">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>









        </div>
        <div class="Publication">

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>

                <div id="EventPeopleNumberElemnt">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>









        </div>
        <div class="Publication">

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>

                <div id="EventPeopleNumberElemnt">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>









        </div>
        <div class="Publication">

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>

                <div id="EventPeopleNumberElemnt">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>









        </div>






    </div>

</div>



<script>
    function openChat() {document.getElementById("chat").style.display = "grid";}
    function closeChat() {document.getElementById("chat").style.display = "none";}
</script>



</body>

</html>