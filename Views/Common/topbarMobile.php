<div id="TopBarMobile" class="TopBar">

    <i id="Bar" class="fas fa-bars" onclick="ToggleMobileMenuBar()"></i>

    <i class="fas fa-heart"></i>

    <a class="Ball-link" href="#Page"><img id="Ball-Image" src="../../Public/Images/logo-no-writing.png"></a>

    <div id="Mobile-Drop-Menu-Bar" class="Mobile-Drop-Menu-Bar">

        <div class="ProfileLinks">

            <a href="#page"><i class="fas fa-calendar-alt"></i><h>Moje wydarzenia</h></a>

            <a href="#page"><i class="fas fa-map"></i><h>Oznaczone miejsca</h></a>

            <a id="CreateEvent" href="?page=createEvent"><i class="far fa-calendar-plus"></i><h>Utwórz wydarzenie</h></a>

            <a href="?page=markplace"><i class="fas fa-map-marked-alt"></i><h>Oznacz miejsce</h></a>

            <a href="#page"><i class="fas fa-bell"></i><h>Powiadomienia</h></a>

            <a href="?page=newspage"><i class="fas fa-globe"></i><h>Aktualności</h></a>

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

    <form id="SearchFormMobile" class="Mobile-Drop-Menu-Search">

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

</div>