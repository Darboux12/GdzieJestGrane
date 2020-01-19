

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

                alert(res);

                $submitBtn.hide();

                $form.append('<button id="JoinButton" type="submit">Joined</button>')


            })

            .always(function() {
                $submitBtn.removeClass('loading');
                $submitBtn.prop('disabled', false);
            });
    });

})