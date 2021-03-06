
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
                                     <button style="background: darkorange; color: white" type="button" onclick="takePower(${el.id_user})">
                                     <i class="fas fa-user-shield"></i>
                                 </button></td>
                                 </tr>`
                );
            })
        });
}

function makeStatistic() {


    if (!confirm('Do you want to make statistic?')) {
        return;
    }

    const apiUrl = "http://localhost";


    $.ajax({
        url : apiUrl + '/?page=admin_make_stat',
        dataType : 'json'
    })


        .done((res) => {

            alert("Statistic successfully created!");

        });




}

function showStatistic() {

    const apiUrl = "http://localhost";

    const $list = $('.statistic-list');

    $.ajax({
        url : apiUrl + '/?page=admin_show_stat',
        dataType : 'json'
    })


        .done((res) => {



            $list.empty();

            res.forEach(el => {
                $list.append(`
                                 <tr>
                                 <td>${el.date}</td>
                                 <td>${el.author}</td>
                                 <td>${el.discipline}</td>
                                 <td>${el.num_users}</td>
                                 <td>${el.num_ads}</td>
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

function hideUsers() {

    const $list = $('.users-list');

    $list.empty();

}

function hideStatistic() {

    const $list = $('.statistic-list');

    $list.empty();

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

function takePower(id){

    const apiUrl = "http://localhost";
    const $list = $('.users-list');

    if (!confirm('Do you want to degrade this moderator?')) {
        return;
    }

    $.ajax({
        url : apiUrl + '/?page=admin_degrade_user',
        method : "POST",
        data : {
            id : id
        },
        success: function() {
            alert('Selected user successfully degraded!');
            getUsers();
        }
    });
}

function sortTable(){

        var table, rows, switching, i, x, y, shouldSwitch;

        table = document.getElementById("myTable");

        switching = true;

        while (switching) {

            switching = false;

            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {

                shouldSwitch = false;

                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];

                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
}

function toggleActionNav(){

    $(".ActionNav").toggle();

    $(".PopularEventButton").toggle();

    $('#CloseActionNav').toggle();

}

function hideActionNav(){
    $(".ActionNav").toggle();
    $(".PopularEventButton").toggle();
    $('#CloseActionNav').toggle();
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
                                     <i class="fas fa-user-shield"></i>
                                     <button style="background: darkorange; color: white" type="button" onclick="takePower(${el.id_user})">
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


