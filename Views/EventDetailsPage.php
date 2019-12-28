<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/GeneralStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/PagesStyle/EventDetailsPageStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/TopBarStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/PopularEventsNav.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/ChatBoxStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/ElementsStyle/PopularEventsNav.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Event Details</title>

</head>


<body>



<div class="Wrapper">

    <div  id="TopBarStandard" class="TopBar">

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

    <div id="TopBarMobile" class="TopBar">

        <i id="Bar" class="fas fa-bars" onclick="ToggleMobileMenuBar()"></i>

        <i class="fas fa-heart"></i>

        <a class="Ball-link" href="#Page"><img id="Ball-Image" src="../Public/Images/logo-no-writing.png"></a>

        <div id="Mobile-Drop-Menu-Bar" class="Mobile-Drop-Menu-Bar">

            <div class="ProfileLinks">

                <a href="#page"><i class="fas fa-calendar-alt"></i><h>Moje wydarzenia</h></a>

                <a href="#page"><i class="fas fa-map"></i><h>Oznaczone miejsca</h></a>

                <a id="CreateEvent" href="CreateEventPage.php"><i class="far fa-calendar-plus"></i><h>Utwórz wydarzenie</h></a>

                <a href="#page"><i class="fas fa-map-marked-alt"></i><h>Oznacz miejsce</h></a>

                <a href="#page"><i class="fas fa-bell"></i><h>Powiadomienia</h></a>

                <a href="#page"><i class="fas fa-globe"></i><h>Aktualności</h></a>

            </div>

        </div>

        <i id="MobileSearch" onclick="ToggleMobileMenuSearch()" class="fas fa-search"></i>

        <i  id="usericon" class="fas fa-user" onclick="ToggleMobileMenuUser()"></i>

        <div id="Mobile-Drop-Menu-User" class="Mobile-Drop-Menu-User">

            <div class="UserProfile">

                <img src="../Public/Images/Person1.jpg">

                <div class="NameSeeProfile">
                    <h id="Name">Janek126p</h>
                </div>

                <a href="#page"><h>Zobacz profil</h><i class="fas fa-chevron-circle-right"></i></a>

            </div>

            <div class="ProfileLinks">

                <a href="#page"><i class="fas fa-user-friends"></i><h>Znajomi</h></a>

                <a href="#page"><i class="fas fa-cog"></i><h>Ustawienia</h></a>

                <a href="#page"><i class="fas fa-sign-out-alt"></i><h>Wyloguj</h></a>



            </div>



        </div>

        <div id="Mobile-Drop-Menu-Search" class="Mobile-Drop-Menu-Search">

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
                    <option value="0">Wybierz miasto</option>
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

    </div>

    <div class="EventInformation">

        <div class="EventInformationFieldContainer">

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Nazwa wydarzenia</h>
                <h id="FieldInfo">Siatkówka dla pań</h>

            </div>

        </div>

        <img src="../Public/Images/Kamienna.png">

        <div class="EventDescription">
            <h>O wydarzeniu</h>
            <textarea rows="20" readonly>To jest pole tekstowe</textarea>
        </div>

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
</script>


</body>
</html>