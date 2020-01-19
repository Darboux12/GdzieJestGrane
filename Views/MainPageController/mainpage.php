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
    <link rel="icon" href="../../Public/Images/website_icon.png">
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
            <input  id="eventTitle" form="SearchForm" name="eventTitle" type="text" placeholder="Search title..." onfocus="this.placeholder=''" onblur="this.placeholder='Search title...'" class="search-box-input">
        </div>

        <div class="SearchBar-Searchbox">
            <input id="eventLocalization" name="eventLocalization" type="text" placeholder="Search localization..." onfocus="this.placeholder=''" onblur="this.placeholder='Search localization...'" class="search-box-input">
        </div>

        <div id="SelectSport" class="SearchNavSelect">
            <select id="eventDiscipline" name="eventDiscipline" class="SearchNavSelect">
                <option value= "">Choose discipline</option>
                <option value="Football">Football</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Basketball">Basketball</option>
                <option value="Swimming">Swimming</option>
                <option value="Canoeing">Canoeing</option>
                <option value="Golf">Golf</option>
                <option value="Running">Running</option>
                <option value="Other">Other</option>
            </select>
            <i class="fas fa-caret-down"></i>
        </div>

        <div class="SearchBar-SelectNumber">

            <h>Search event date:</h>

            <div class="SelectInputs">
                <input name="eventDate" id="eventDate" type="date"/>
            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Search people number:</h>

            <div class="SelectInputs">
                <input name="eventPeopleNumber" id="eventPeopleNumber" type="number" placeholder="People number..." onfocus="this.placeholder=''" onblur="this.placeholder='People number...'" min="0" step="any" />
            </div>

        </div>

        <div class="CheckBox">

            <h>Search gender</h>

            <div class="Checkbox-options">

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input id="gender-male" class="gender" form="SearchForm" name="gender" type="checkbox" value="Male">
                        <span class="checkmark"></span>
                        <h>Men</h>
                    </label>

                </div>

                <div class="Checkbox-option-container">

                    <label class="Checkbox-option">
                        <input id="gender-female" class="gender" form="SearchForm" name="gender" type="checkbox" value="Female">
                        <span class="checkmark"></span>
                        <h>Women</h>
                    </label>

                </div>


                <div class="Checkbox-option-container">

                    <label id="last-box" class="Checkbox-option">
                        <input id="gender-all" class="gender" form="SearchForm" name="gender" type="checkbox" value="All">
                        <span class="checkmark"></span>
                        <h>Both</h>
                    </label>

                </div>

            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Age:</h>

            <div class="SelectInputs">
                <input name="eventAgeFrom" id="AgeFrom" type="number" placeholder="From..." onfocus="this.placeholder=''" onblur="this.placeholder='From...'" min="0" step="any" />
                <input name="eventAgeTo" id="AgeTo"  type="number" placeholder="To..." onfocus="this.placeholder=''" onblur="this.placeholder='To...'" min="0" step="any" />
            </div>

        </div>

        <div class="SearchBar-SelectNumber">

            <h>Price:</h>

            <div class="SelectInputs">
                <input name="eventPriceFrom" id="PriceFrom" type="number" placeholder="From..." onfocus="this.placeholder=''" onblur="this.placeholder='From...'" min="0" step="any" />
                <input name="eventPriceTo" id="PriceTo"  type="number" placeholder="To..." onfocus="this.placeholder=''" onblur="this.placeholder='To...'" min="0" step="any" />
            </div>

        </div>

        <button id="SubmitButton" type="submit" form="SearchForm">Search ads</button>

    </form>

    <div class="RightNav">

        <h id="NavTitle">Most popular ads</h>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="../DetailsPageController/detailsPage.php"><i class="fas fa-fire"></i></a>
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

            <div id=<?= $ad->getId()?> class="Publication">

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
                    <h id="Age"><?=
                        $ad->getMinAge() . ' - '
                        . $ad->getMaxAge() . " years old"
                        ?>
                    </h>

                    <div id="EventPeopleNumberElement">
                        <i class="fas fa-users"></i>
                        <h><?=$ad->getInvolvedPeople()  . ' out of ' . $ad->getNumPeople()?></h>
                    </div>

                    <form action="?page=seeDetails"method="post">

                        <input type="hidden" name="publicationId" value=<?= $ad->getId()?>>
                        <button class="SeeDetails" type="submit">Zobacz szczegóły</button>
                    </form>



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

        <?php foreach($allAds as $ad): ?>

            <div id=<?= $ad->getId()?> class="Publication">

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
                    <h id="Age"><?=
                        $ad->getMinAge() . ' - '
                        . $ad->getMaxAge() . " years old"
                        ?>
                    </h>

                    <div id="EventPeopleNumberElement">
                        <i class="fas fa-users"></i>
                        <h><?=$ad->getInvolvedPeople()  . ' out of ' . $ad->getNumPeople()?></h>
                    </div>





                </div>

                <div class="ImageAndDescription">

                    <?= '<img src="data:image/jpeg;base64,'.base64_encode($ad->getImage()) .'" />' ?>

                    <textarea class="ShortDescription" readonly rows="10"><?= $ad->getDescription()?></textarea>

                    <form action="?page=seeDetails"method="post">

                        <input type="hidden" name="publicationId" value=<?= $ad->getId()?>>
                        <button class="SeeDetails" type="submit">Zobacz szczegóły</button>
                    </form>



                </div>







            </div>


        <?php endforeach ?>





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