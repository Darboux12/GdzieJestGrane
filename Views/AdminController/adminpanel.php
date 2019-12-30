


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/adminpanel.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">

    <script type="text/javascript" src="../../Public/JS/chatbox.js"></script>
    <script type="text/javascript" src="../../Public/JS/topbar.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>



    <title>Main Page</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="UserTable">

        <table>
            <thead>
            <tr>
                <th>Login</th>
                <th>Email</th>
                <th>Role</th>
                <th>Creation Date</th>
            </tr>
            </thead>

            <tbody class="users-list">

            </tbody>


        </table>

    </div>

    <div class="ActionNav">

        <button type="button" onclick="getUsers()">Get All Users</button>

    </div>




</div>





<?php include(dirname(__DIR__) . '/Common/chatbox.php'); ?>

<script>

    function getUsers() {

        const apiUrl = "http://localhost";
        const $list = $('.users-list');
        $.ajax({
            url : apiUrl + '/?page=admin_users',
            dataType : 'json'
        })
            .done((res) => {
                $list.empty();
                //robimy pętlę po zwróconej kolekcji
                //dołączając do tabeli kolejne wiersze
                res.forEach(el => {
                    $list.append(`<tr>
 <td>${el.login}</td>
 <td>${el.email}</td>
 <td>${el.role}</td>
 <td>${el.creation_date}</td>
 </tr>`);
                })
            });
    }

</script>


</body>

</html>