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
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/PopularEventsNav.css">

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

        <a href="#Page"><img id="Ball-Image" src="../Public/Images/logo-no-writing.png"></a>

        <i class="fas fa-bars"></i>

        <a id="News-Link" href="#page"><i class="fas fa-globe"></i>Aktualności</a>

        <a href="#page"><i class="fas fa-map-marked-alt"></i>Oznacz miejsce</a>

        <a id="MakeEvent-Link" href="CreateEventPage.php"><i class="far fa-calendar-plus"></i>Utwórz wydarzenie</a>

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

                        <div class="ProfileLinks-link">
                            <a href="#page">Moje wydarzenia</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>

                        <div class="ProfileLinks-link">
                            <a href="#page">Oznaczone miejsca</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>

                        <div class="ProfileLinks-link">
                            <a href="#page">Znajomi</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>

                        <div class="ProfileLinks-link">
                            <a href="#page">Ustawienia</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>

                        <div class="ProfileLinks-link">
                            <a href="#page">Wyloguj</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>

                    </div>
                </form>

            </div>

        </div>

        <i class="fas fa-heart"></i>

        <i class="fas fa-bell"></i>

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

        <div id="SelectCity" class=SearchNavSelect>
            <select>
                <option value="0">Wybierz województwo</option>
                <option value="1">Kraków</option>
                <option value="2">Częstochowa</option>
                <option value="3">Tarnów</option>
                <option value="4">Oświęcim</option>
                <option value="5">Zakopane</option>
                <option value="6">Chrzanów</option>
                <option value="7">Wieliczka</option>
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

        <div class="SearchBar-SelectNumber">

            <h>Podaj datę wydarzenia:</h>

            <div class="SelectInputs">
                <input id="NumebrOfPeopleInput" type="date"/>
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

        <button id="SubmitButton" type="submit">Wyszukaj</button>


    </div>

    <div class="RightNav">

        <h id="NavTitle">Najpopularniejsze wydarzenia w twojej okolicy</h>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>

            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="EventDetailsPage.php"><i class="fas fa-fire"></i></a>
                <h>Dołącz<br>teraz!</h>
            </div>


            <div class="PopularEventInfo">
                <a href="#page">Siatkówka dla pań</a>
                <h id="discipline">Siatkówka</h>
                <h id="city">Kraków</h>
                <h id="date">20.11 19:00</h>
                <h id="views">Wyświetlenia: 3700</h>
            </div>

        </div>

    </div>

    <div class="MainContent">

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>



        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>



        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>

        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>

        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>



        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>



        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>



        </div>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">Siatkówka dla pań</h>
                <h id="EventSport">Siatkówka</h>
                <h id="EventDate">Piątek, 20 lis, 19:00</h>
                <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>
                <h id="Age">Wiek: 18 - 30 lat</h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>4 z 12</h>
                </div>

            </div>

            <a href="#page"> <img src="../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>



        </div>



    </div>

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