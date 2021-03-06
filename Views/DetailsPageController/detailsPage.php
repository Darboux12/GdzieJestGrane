<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Public/Images/website_icon.png">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/eventDetails.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/popularEventsNav.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/popularEventsNav.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../../Public/JS/EventDetails.js"></script>
    <script type="text/javascript" src="../../Public/JS/topbar.js"></script>
    <script type="text/javascript" src="../../Public/JS/mainpage.js"></script>

    <title>Event Details</title>

</head>


<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>


    <div class="EventInformation">

        <div class="EventInformationFieldContainer">

            <div class="InformationField">


                <h id="FieldName">Event Title</h>
                <h id="FieldInfo"><?= $ad->getTitle()?></h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Event Discipline</h>
                <h id="FieldInfo"><?= $ad->getDiscipline()?></h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Event Age</h>
                <h id="FieldInfo"><?= $ad->getMinAge()?> - <?= $ad->getMaxAge()?> years old</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Event Price</h>
                <h id="FieldInfo"><?= $ad->getPrice()?> pln for <?= $ad->getTime()?> hour(s)</h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Required people</h>
                <h id="FieldInfo"><?= $ad->getInvolvedPeople()?> from <?= $ad->getNumPeople()?></h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Gender</h>
                <h id="FieldInfo"><?= $ad->getGender()?></h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Event Date</h>
                <h id="FieldInfo"><?= $ad->getDate()?></h>

            </div>

            <div class="InformationField">

                <h id="FieldName">Event Localization</h>
                <h id="FieldInfo"><?= $ad->getStreet() . " "
                    . $ad->getNumber() . ", "
                    . $ad->getPostalCode() . " "
                    . $ad->getCity()
                    ?></h>

            </div>



            <form id="JoinForm">
                <input id="EventId" name="EventId" type="hidden" value=<?= $ad->getId()?>>
                <input id="JoinButton" type="submit" value="Join The Event">
            </form>


        </div>

        <?= '<img src="data:image/jpeg;base64,'.base64_encode($ad->getImage()) .'" />' ?>

        <div class="EventDescription">
            <h>About Event</h>
            <textarea rows="20" readonly><?= $ad->getDescription()?></textarea>
        </div>

    </div>

    <div class="RightNav">

        <h id="NavTitle">Najpopularniejsze wydarzenia w twojej okolicy</h>

        <div class="PopularEvent">

            <div class="JoinNow">
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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
                <a href="detailsPage.php"><i class="fas fa-fire"></i></a>
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

<?php include(dirname(__DIR__) . '/Common/chatbox.php'); ?>
</body>
</html>