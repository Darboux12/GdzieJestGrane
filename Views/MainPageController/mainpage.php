
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/mainpage.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/checkbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/popularEventsNav.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Main Page</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

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