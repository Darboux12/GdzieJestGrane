
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
                $list.append(`
                                 <tr>
                                 <td>${el.login}</td>
                                 <td>${el.email}</td>
                                 <td>${el.role}</td>
                                 <td>${el.creation_date}</td>
                                 <td><button style="background: red; color: white" type="button" onclick="deleteUser(${el.email})">
                                     <i class="fas fa-user-minus"></i>
                                 </button></td>
                                 </tr>`
                );
            })
        });
}

function deleteUser(id) {

    const apiUrl = "http://localhost";
    const $list = $('.users-list');

    if (!confirm('Do you want to delete this user?')) {
        return;
    }

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

function addUser(){

    alert("Hej");
}



$(document).ready(function () {

    const apiUrl = "http://localhost";
    const $list = $('.users-list');

    const $form = $('#findForm');
    const $input = $('#DataInput');
    const $submitBtn = $form.find(":submit");

    $form.on("submit", function(e) {

        e.preventDefault();

        $submitBtn.addClass('loading');
        $submitBtn.prop('disabled', true);

        $.ajax({
            url: apiUrl + '/?page=admin_find_user',
            method : "POST",
            dataType : "json",
            data : {
                login : $input.val()
            }, success: function() {}
        })

            .done((res) => {
                $list.empty();

                res.forEach(el => {
                    $list.append(`
                                <tr>
                                 <td>${el.login}</td>
                                 <td>${el.email}</td>
                                 <td>${el.role}</td>
                                 <td>${el.creation_date}</td>
                                 <td><button style="background: red; color: white" type="button" onclick="deleteUser(${el.id_user})">
                                     <i class="fas fa-user-minus"></i>
                                 </button></td>
                                 </tr>
                            `);
                })
            })

            .always(function() {
                $submitBtn.removeClass('loading');
                $submitBtn.prop('disabled', false);
            });
    });

})


