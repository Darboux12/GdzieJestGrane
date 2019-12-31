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