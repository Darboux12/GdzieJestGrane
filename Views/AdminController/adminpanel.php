
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/adminpanel.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/SearchField.css">


    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="../../Public/JS/chatbox.js"></script>
    <script src="../../Public/JS/topbar.js"></script>
    <script src="../../Public/JS/adminPanel.js"></script>

    <title>Admin Panel</title>

</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="UserTable">

        <table id="myTable">
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

        <table id="mySecondTable">
            <thead>
            <tr>
                <th>Statistic Date</th>
                <th>Statistic Author</th>
                <th>Most Popular Sport</th>
                <th>Month Added Users</th>
                <th>Ads on page</th>
            </tr>
            </thead>

            <tbody class="statistic-list">

            </tbody>
        </table>

    </div>

    <div class="ActionNav">

        <form id="findForm" class="SearchBar-Searchbox">
            <input id="DataInput" type="text" placeholder="Search for user..." onfocus="this.placeholder=''" onblur="this.placeholder='Search for user...'" class="search-box-input">
            <button type="submit" class="search-box-button"><i class="fas fa-search"></i></button>
        </form>

        <button id="GetAllButton" type="button" onclick="getUsers()"><i class="fas fa-users"></i>Get All Users</button>
        <button id="HideButton" type="button" onclick="hideUsers()"><i class="fas fa-eye-slash"></i>Hide Users</button>
        <button id="SortUser" type="button" onclick="sortTable()"><i class="fas fa-sort-alpha-up"></i>Sort Users</button>
        <button id="MakeStat" type="button" onclick="makeStatistic()"><i class="fab fa-creative-commons-share"></i>Make Statistic</button>
        <button id="ShowStat" type="button" onclick="showStatistic()"><i class="fas fa-eye"></i>Show Statistic</button>


    </div>

</div>

<?php include(dirname(__DIR__) . '/Common/chatbox.php'); ?>


<script>






</script>






</body>

</html>