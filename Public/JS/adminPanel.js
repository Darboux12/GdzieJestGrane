function getUsers() {
    
    const apiUrl = "http://localhost";
    const $list = $('.users-list');

    $.ajax({
        url : apiUrl + '/?page=admin_users',
        dataType : 'json'
    })
        .done((res) => {
            $list.empty();

            res.forEach(el => {
                $list.append(`<tr>
 <td>${el.login}</td>
 <td>${el.email}</td>
 <td>${el.role}</td>
 <td>${el.creation_date}</td>
 <td><button class="btn btn-danger" type="button" onclick="deleteUser(${el.id_user})">
     <i class="fas fa-user-minus"></i>
 </button></td>
 </tr>`);
            })
        });
}

function deleteUser(id) {
    if (!confirm('Do you want to delete this user?')) {
        return;
    }
    const apiUrl = "http://localhost";
    $.ajax({
        url : apiUrl + '/?page=admin_delete_user',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Selected user successfully deleted from database!');
            getUsers();
        }
    });
}

$(document).ready(function () {

    const apiUrl = "http://localhost";

    const $list = $('.users-list');

//pobieramy wszystkie niezbędne elementy
    const $form = $('#findform');
    const $inputTitle = $('#DataInput');
    const $submitBtn = $form.find(":submit");



//podpinamy się pod wysłany formularz
    $form.on("submit", function(e) {

        e.preventDefault();

        //po kliknięciu wyłączam submit i dodaję mu loading
        $submitBtn.addClass('loading');
        $submitBtn.prop('disabled', true);

        //wysyłamy dane
        $.ajax({
            url: apiUrl + '/?page=admin_find_user',
            method : "POST",
            dataType : "json",
            data : {
                login : $inputTitle.val()
            }, success: function() {
                alert('holy fuck!');
            }
        })

            .done((res) => {
                $list.empty();

                res.forEach(el => {
                    $list.append(`<tr>
 <td>${el.login}</td>
 <td>${el.email}</td>
 <td>${el.role}</td>
 <td>${el.creation_date}</td>
 <td><button class="btn btn-danger" type="button" onclick="deleteUser(${el.id_user})">
     <i class="fas fa-user-minus"></i>
 </button></td>
 </tr>`);
                })
            })



            .always(function() {
                //po zakończeniu połączenia włączam submit i wyłączam klasę loading
                $submitBtn.removeClass('loading');
                $submitBtn.prop('disabled', false);
            });
    });

})

