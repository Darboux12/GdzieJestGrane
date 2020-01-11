
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
                                 <td><button style="background: red; color: white" type="button" onclick="deleteUser(${el.id_user})">
                                     <i class="fas fa-user-minus"></i>
                                     <button style="background: green; color: white" type="button" onclick="givePower(${el.id_user})">
                                     <i class="fas fa-user-shield"></i>
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

function givePower(id){

    const apiUrl = "http://localhost";
    const $list = $('.users-list');

    if (!confirm('Do you want to make this user moderator?')) {
        return;
    }

    $.ajax({
        url : apiUrl + '/?page=admin_power_user',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Selected user successfully made from moderator!');
            getUsers();
        }
    });
}

function sortTable(){

    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                //check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

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
                login : $input.val(),
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
                                 </button>
                                 <button style="background: green; color: white" type="button" onclick="givePower(${el.id_user})">
                                     <i class="fas fa-user-shield"></i></td>
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


