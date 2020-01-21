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

    var bubble = $("#SearchForm-Mobile");



    bubble.toggle("show");
}

$(document).ready(function () {

    const apiUrl = "http://localhost";

    const $form = $('#SearchForm-Mobile');

    const $eventTitle = $('#eventTitle-Mobile');
    const $eventLocalization = $('#eventLocalization-Mobile');
    const $eventDiscipline = $('#eventDiscipline-Mobile');
    const $eventDate = $('#eventDate-Mobile');
    const $eventPeopleNumber = $('#eventPeopleNumber-Mobile');
    const $eventAgeFrom = $('#AgeFrom-Mobile');
    const $eventAgeTo= $('#AgeTo-Mobile');
    const $eventPriceFrom = $('#PriceFrom-Mobile');
    const $eventPriceTo= $('#PriceTo-Mobile');


    $maincontent = $('.MainContent');

    const $submitBtn = $form.find(":submit");

    $form.on("submit", function(e) {

        var gender = [];

        $('.gender').each(function () {

            if($(this).is(":checked")){
                gender.push($(this).val())
                return false;
            }
        });

        gender = gender.toString();

        e.preventDefault();

        $submitBtn.addClass('loading');
        $submitBtn.prop('disabled', true);

        $.ajax({
            url: apiUrl + '/?page=main_page_search',
            dataType : 'json',
            method : "POST",
            data : {
                eventTitle : $eventTitle.val(),
                eventLocalization : $eventLocalization.val(),
                eventDiscipline : $eventDiscipline.val(),
                eventDate : $eventDate.val(),
                eventPeopleNumber : $eventPeopleNumber.val(),
                eventGender : gender,
                eventAgeFrom : $eventAgeFrom.val(),
                eventAgeTo : $eventAgeTo.val(),
                eventPriceFrom : $eventPriceFrom.val(),
                eventPriceTo : $eventPriceTo.val()

            }
        })

            .done((res) => {

                alert("Hrj");

                $maincontent.empty()

                res.forEach(el => {
                    $maincontent.append(`


                                
                                
                             <div class="Publication">

            <i class="fas fa-volleyball-ball"></i>

            <div class="EventInformation">

                <h id="EventTitle">${el.title}</h>
                <h id="EventSport">${el.discipline}</h>
                <h id="EventDate">${el.date}</h>
                <h id="EventAddress">
                ${el.street}
                ${el.number}
                ${el.postal_code}
                ${el.city}
                </h>
                <h id="Age">
                Wiek: ${el.min_age} - ${el.max_age} lat
                </h>

                <div id="EventPeopleNumberElement">
                    <i class="fas fa-users"></i>
                    <h>${el.involved_people} z ${el.num_people}</h>
                </div>
                
                 <form action="?page=seeDetails"method="post">

                 <input type="hidden" name="publicationId" value=${el.id_ad}>
                <button class="SeeDetails" type="submit">Zobacz szczegóły</button>
                
                </form>

              
            </div>

            <div class="ImageAndDescription">

                <img src="data:image/png;base64, ${el.image}" alt="Red dot" />

                <textarea class="ShortDescription" readonly rows="20">${el.description}</textarea>



            </div>







        </div>


`
                    );
                })




            })

            .fail((res) => {})

            .always(function() {
                $submitBtn.removeClass('loading');
                $submitBtn.prop('disabled', false);
            });
    });

})
