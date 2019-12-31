


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

    <script type="text/javascript" src="../../Public/JS/adminPanel.js"></script>



    <title>Main Page</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="UserTable">

        <div class="SearchBar-Searchbox">
            <input  type="text" placeholder="Search..." onfocus="this.placeholder=''" onblur="this.placeholder='Search...'" class="search-box-input">
            <button class="search-box-button"><i class="fas fa-search"></i></button>
        </div>

        <table>
            <thead>
            <tr>
                <th>Login</th>
                <th>Email</th>
                <th>Role</th>
                <th>Creation Date</th>
                <th>Action</th>
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



</body>

</html>