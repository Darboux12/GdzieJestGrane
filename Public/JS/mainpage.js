window.addEventListener('click',function (event) {

    var bubble = document.getElementById('myBubble');
    var userIcon = document.getElementById('usericon');

    if(event.target != bubble && event.target != userIcon){

        if(bubble.classList.contains('show')){
            bubble.classList.remove('show');
        }
    }
})

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

$(document).ready(function () {

    const apiUrl = "http://localhost";

    const $form = $('#SearchForm');
    const $input = $('#eventTitle');
    const $submitBtn = $form.find(":submit");

    $form.on("submit", function(e) {

        e.preventDefault();

        $submitBtn.addClass('loading');
        $submitBtn.prop('disabled', true);

        $.ajax({
            url: apiUrl + '/?page=main_page_search',
            method : "POST",
            data : {
                input: $input.val()
            }, success: function() {alert("Succes");}
        })

            .done((res) => {
               alert("Done");
            })

            .fail((res) => {alert("Fail");})

            .always(function() {
                $submitBtn.removeClass('loading');
                $submitBtn.prop('disabled', false);
            });
    });

})