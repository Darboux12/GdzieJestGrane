<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/SelectField.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/SearchField.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/mainpage.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/checkbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/popularEventsNav.css">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="../../Public/JS/chatbox.js"></script>
    <script type="text/javascript" src="../../Public/JS/topbar.js"></script>
    <script type="text/javascript" src="../../Public/JS/mainpage.js"></script>

    <title>Main Page</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <form id="SearchForm" class="SearchNav">

        <div class="SearchBar-Searchbox">
                <input  id="eventTitle" form="SearchForm" name="eventTitle" type="text" placeholder="Wybierz tytuł wydarzenia..." onfocus="this.placeholder=''" onblur="this.placeholder='Wybierz tytuł wydarzenia...'" class="search-box-input">
        </div>

        <div class="SearchBar-Searchbox">
                <input name="eventLocalization" type="text" placeholder="Wybierz lokalizację..." onfocus="this.placeholder=''" onblur="this.placeholder='Wybierz lokalizację...'" class="search-box-input">
            </div>

        <div id="SelectSport" class="SearchNavSelect">
            <select name="eventDiscipline" class="SearchNavSelect">
                <option value="0">Wybierz dyscyplinę</option>
                <option value="Piłka Nożna">Piłka Nożna</option>
                <option value="Siatkówka">Siatkówka</option>
                <option value="Koszykówka">Koszykówka</option>
                <option value="Pływanie">Pływanie</option>
                <option value="Kajakarstwo">Kajakarstwo</option>
                <option value="Golf">Golf</option>
                <option value="Bieganie">Bieganie</option>
                <option value="Inne">Inne</option>
            </select>
            <i class="fas fa-caret-down"></i>
        </div>

        <div class="SearchBar-SelectNumber">

            <h>Podaj datę wydarzenia:</h>

            <div class="SelectInputs">
                <input name="eventDate" id="NumebrOfPeopleInput" type="date"/>
            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Podaj liczbę osób:</h>

            <div class="SelectInputs">
                <input name="eventPeopleNumber" id="NumebrOfPeopleInput" type="number" placeholder="Liczba osób..." onfocus="this.placeholder=''" onblur="this.placeholder='Liczba osób...'" min="0" step="any" />
            </div>

        </div>

        <div class="CheckBox">

            <h>Szukam:</h>

            <div class="Checkbox-options">

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input form="SearchForm" name="gender" type="checkbox" value="male">
                        <span class="checkmark"></span>
                        <h>Mężczyzn</h>
                    </label>

                </div>

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input form="SearchForm" name="gender" type="checkbox" value="female">
                        <span class="checkmark"></span>
                        <h>Kobiet</h>
                    </label>

                </div>


                <div class="Checkbox-option-container">

                    <label id="last-box" class="Checkbox-option">
                        <input form="SearchForm" name="gender" type="checkbox" value="all">
                        <span class="checkmark"></span>
                        <h>Dowolnie</h>
                    </label>

                </div>

            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Podaj wiek:</h>

            <div class="SelectInputs">
                <input name="eventAgeFrom" id="from" type="number" placeholder="od..." onfocus="this.placeholder=''" onblur="this.placeholder='od...'" min="0" step="any" />
                <input name="eventAgeTo" id="to"  type="number" placeholder="do..." onfocus="this.placeholder=''" onblur="this.placeholder='do...'" min="0" step="any" />
            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Podaj cenę:</h>

            <div class="SelectInputs">
                <input name="eventPriceFrom" id="from" type="number" placeholder="od..." onfocus="this.placeholder=''" onblur="this.placeholder='od...'" min="0" step="any" />
                <input name="eventPriceTo" id="to"  type="number" placeholder="do..." onfocus="this.placeholder=''" onblur="this.placeholder='do...'" min="0" step="any" />
            </div>

        </div>

        <button id="SubmitButton" type="submit" form="SearchForm">Wyszukaj</button>

    </form>

    <div class="RightNav">

        <h id="NavTitle">Najpopularniejsze wydarzenia w twojej okolicy</h>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../EventDetailsPageController/EventDetailsPage.php"><i class="fas fa-fire"></i></a>
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

        <?php foreach($allAds as $ad): ?>

        <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle"><?= $ad->getTitle()?></h>
                <h id="EventSport"><?= $ad->getDiscipline()?></h>
                <h id="EventDate"><?= $ad->getDate()?></h>
                <h id="EventAddress">
                    <?= $ad->getStreet() . " "
                    . $ad->getNumber() . ", "
                    . $ad->getPostalCode() . " "
                    . $ad->getCity()
                    ?>
                </h>
                <h id="Age"><?='Wiek: ' . ' '
                    . $ad->getMinAge() . ' - '
                    . $ad->getMaxAge()
                    ?>
                </h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h><?=$ad->getInvolvedPeople()  . ' z ' . $ad->getNumPeople()?></h>
                </div>

                <a id="SeeDetails" href="#page">Zobacz szczegóły</a>

            </div>

            <div class="ImageAndDescription">

                <?= '<img src="data:image/jpeg;base64,'.base64_encode($ad->getImage()) .'" />' ?>

                <textarea class="ShortDescription" readonly rows="20"><?= $ad->getDescription()?></textarea>



            </div>







        </div>


        <?php endforeach ?>





    </div>

</div>

<div class="Wrapper-Mobile">

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="MobileShowEvents">

        <h>Pokaż wydarzenia</h>

        <div class="MobileShowEvents-input">
            <input id="button1" type="button" value="Moje wydarzenia:" onclick="MobileChooseEvent()">
            <input id="button2" type="button" value="Wszystkie wydarzenia" onclick="MobileChooseEvent()">
        </div>

    </div>

    <div class="MainContent">

        <div class="Publication">

            <div class="EventSportLabel">
                <h id="EventSport">Siatkówka</h>
            </div>

            <div class="EventInformation">

                <div id='InfoLeft' class="Information">

                    <h id="EventTitle">Siatkówka dla pań</h>

                    <h id="EventDate">Piątek, 20 lis, 19:00</h>
                    <h id="EventAddress">Kamienna 17, 31-403 Kraków</h>


                </div>

                <div class="Information">

                    <h id="Age">Wiek: 18 - 30 lat</h>

                    <div id="EventPeopleNumberElement">
                        <i class="fas fa-users"></i>
                        <h>4 z 12</h>
                    </div>

                </div>

            </div>

            <a href="#page"> <img src="../../Public/Images/Kamienna.png"> </a>

            <textarea class="ShortDescription" readonly rows="8">Zapraszam wszystkie panie, które mają ochotę się trochę poruszać wieczorem.
                Poziom umiejętności nie ma znaczenia (gramy czysto dla rozrywki :D)</textarea>

            <a id="SeeDetails" href="#page">Zobacz szczegóły</a>





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

</body>

</html>