<div id="TopBarMobile" class="TopBar">

    <i id="Bar" class="fas fa-bars" onclick="ToggleMobileMenuBar()"></i>

    <i class="fas fa-heart"></i>

    <a class="Ball-link" href="#Page"><img id="Ball-Image" src="../../Public/Images/logo-no-writing.png"></a>

    <div id="Mobile-Drop-Menu-Bar" class="Mobile-Drop-Menu-Bar">

        <div class="ProfileLinks">

            <a href="#page"><i class="fas fa-calendar-alt"></i><h>Moje wydarzenia</h></a>

            <a href="#page"><i class="fas fa-map"></i><h>Oznaczone miejsca</h></a>

            <a id="CreateEvent" href="../CreateEventPageController/CreateEventPage.php"><i class="far fa-calendar-plus"></i><h>Utwórz wydarzenie</h></a>

            <a href="#page"><i class="fas fa-map-marked-alt"></i><h>Oznacz miejsce</h></a>

            <a href="#page"><i class="fas fa-bell"></i><h>Powiadomienia</h></a>

            <a href="#page"><i class="fas fa-globe"></i><h>Aktualności</h></a>

        </div>

    </div>

    <i id="MobileSearch" onclick="ToggleMobileMenuSearch()" class="fas fa-search"></i>

    <i  id="usericon" class="fas fa-user" onclick="ToggleMobileMenuUser()"></i>

    <div id="Mobile-Drop-Menu-User" class="Mobile-Drop-Menu-User">

        <div class="UserProfile">

            <img src="../../Public/Images/Person1.jpg">

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