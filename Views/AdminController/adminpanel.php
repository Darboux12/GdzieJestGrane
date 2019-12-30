
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

    <title>Main Page</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="UserTable">

        <table>
            <tr>
                <th>Login</th>
                <th>Email</th>
                <th>Role</th>
                <th>Creation Date</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
                <td>$100</td>
            </tr>
            <tr>
                <td>Lois</td>
                <td>Griffin</td>
                <td>$150</td>
                <td>$100</td>
            </tr>
            <tr>
                <td>Joe</td>
                <td>Swanson</td>
                <td>$300</td>
                <td>$100</td>
            </tr>
            <tr>
                <td>Cleveland</td>
                <td>Brown</td>
                <td>$250</td>
                <td>$100</td>
            </tr>
        </table>

    </div>

    <div class="ActionNav">

        <button>Get All Users</button>

    </div>




</div>





<?php include(dirname(__DIR__) . '/Common/chatbox.php'); ?>




</body>

</html>