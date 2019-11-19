
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/GeneralStyle.css">
    <link rel="Stylesheet" type="text/css" href="../Public/CSS/MainPageStyle.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Main Page</title>
</head>

<body>


<button class="chatbox-open-button" onclick="openChat()">Hej</button>

<div id="chat" class="chat-container">
    <div class="search-container">
        <input type="text" placeholder="Szukaj" onfocus="this.placeholder = ''">
    </div>
    <div class="coversation-list">
    </div>
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
            <a href="#page"><i class="far fa-calendar-plus"></i>Utwórz wydarzenie</a>

        </div>

        <div id="Notification">
            <a href="#page"><i class="fas fa-user"></i></a>
            <a href="#page"><i class="fas fa-heart"></i></a>
            <a href="#page"><i class="fas fa-bell"></i></a>
        </div>

    </div>

    <div class="SearchNav">

        <div id="SelectSport" class="select">
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

        <div id="SelectState" class="select">
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
        </div>

        <div id="SelectCity" class="select">
            <select>
                <option value="0">Select car:</option>
                <option value="1">Audi</option>
                <option value="2">BMW</option>
                <option value="3">Citroen</option>
                <option value="4">Ford</option>
                <option value="5">Honda</option>
                <option value="6">Jaguar</option>
                <option value="7">Land Rover</option>
                <option value="8">Mercedes</option>
                <option value="9">Mini</option>
                <option value="10">Nissan</option>
                <option value="11">Toyota</option>
                <option value="12">Volvo</option>
            </select>
        </div>


        <div>
            <input id="SelectPrice" class="MainPageSearchInput" type="number" min="0" step="any" />
        </div>
        <div>
            <input id="SelectNumberOfLeople" class="MainPageSearchInput" type="number" min="0" step="any" />
        </div>


        <div>
            <input type="radio">
        </div>





    </div>

    <div class="RightNav">RightNav</div>

    <div class="MainContent">MainContent Jek<br> Hej <br> Hej <br> Hej</div>

    <div class="MainContent">MainContent</div>

</div>



<script>
    function openChat() {document.getElementById("chat").style.display = "grid";}
    function closeChat() {document.getElementById("chat").style.display = "none";}
</script>




</body>

</html>