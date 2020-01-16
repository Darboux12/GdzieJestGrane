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

            <h>Event Title</h>
            <input  name="title" type="text" placeholder="Event title..." onfocus="this.placeholder=''" onblur="this.placeholder='Event title...'">

            <h>Event Date</h>
            <input  name="date" type="date">

            <h>Localization</h>
            <input  name="city" type="text"  placeholder="City..." onfocus="this.placeholder=''" onblur="this.placeholder='City...'">
            <input  name="postal" type="text" placeholder="Postal code..." onfocus="this.placeholder=''" onblur="this.placeholder='Postal code...'">
            <input  name="street" type="text"  placeholder="Street..." onfocus="this.placeholder=''" onblur="this.placeholder='Street...'">
            <input  name="number" type="number" placeholder="Number..." onfocus="this.placeholder=''" onblur="this.placeholder='Number...'">

            <h>Discipline</h>
            <div id="SelectSport" class="SearchNavSelect">
                <select name="discipline">
                    <option value="0">Choose discipline</option>
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

            <h>Required people number</h>
            <input name="pplnumber" type="number" placeholder="People number..." onfocus="this.placeholder=''" onblur="this.placeholder='People number...'">

            <div class="CheckBox">

                <h>Searching for:</h>

                <div class="Checkbox-options">

                    <div class="Checkbox-option-container">

                        <label class="Checkbox-option">
                            <input form="EventForm" name="gender" type="checkbox" value="Male">
                            <span class="checkmark"></span>
                            <h>Men</h>
                        </label>

                    </div>

                    <div class="Checkbox-option-container">

                        <label class="Checkbox-option">
                            <input name="gender" type="checkbox" value="Female">
                            <span class="checkmark"></span>
                            <h>Women</h>
                        </label>

                    </div>


                    <div class="Checkbox-option-container">

                        <label id="last-box" class="Checkbox-option">
                            <input name="gender" type="checkbox" value="All">
                            <span class="checkmark"></span>
                            <h>Both</h>
                        </label>

                    </div>

                </div>

            </div>

            <h>Required age range:</h>
            <div class="EventDataInput">
                <input name="min_age" type="number" placeholder='From .... years' onfocus="this.placeholder=''" onblur="this.placeholder='From .... years'">
                <input name="max_age" type="number" placeholder='To .... years' onfocus="this.placeholder=''" onblur="this.placeholder='To .... years'">
            </div>

            <h>Costs:</h>
            <div class="EventDataInput">
                <input  name="min_price" type="number" placeholder='... pln per person' onfocus="this.placeholder=''" onblur="this.placeholder='... pln per person'">
                <h>for</h>
                <input  name="max_price" type="number" placeholder='... hour game' onfocus="this.placeholder=''" onblur="this.placeholder='... hour game'">
            </div>

        </form>

    </div>

    <div class="CreateEventMap">

        <div id="upload" class="image-upload">

            <h>Upload photo...</h>

            <label for="image">
                <img src="http://goo.gl/pB9rpQ"/>
            </label>
            <input name="image" id="image" form="EventForm" type="file" onchange="readURL(this);" />
        </div>

        <img id="blah" src="../../Public/Images/Blank.png" alt="your image" />

    </div>

    <div class="CreateEventDescription">

        <textarea id="description" name="description" rows="5" cols="50"  form="EventForm" placeholder="Add some event description..." onfocus="this.placeholder=''" onblur="this.placeholder='Add some event description...'"></textarea>

    </div>

    <input id="FormSubmit" type="submit" form="EventForm" value="Create Event">



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