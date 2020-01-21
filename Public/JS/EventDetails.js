
$(document).ready(function () {


    const apiUrl = "http://localhost";
    const $form = $('#JoinForm');
    const $submitBtn = $form.find(":submit");
    const $input = $('#EventId');

    $form.on("submit", function(e) {

        e.preventDefault();
        $submitBtn.addClass('loading');
        $submitBtn.prop('disabled', true);

        $.ajax({
            url: apiUrl + '/?page=joinEvent',
            method : "POST",
            data : {
               EventId : $input.val()
            }
        })

            .done((res) => {

                    $submitBtn.prop('value', res); //versions newer than 1.6







            })

            .always(function() {
                $submitBtn.removeClass('loading');
                $submitBtn.prop('disabled', false);
            });
    });

})