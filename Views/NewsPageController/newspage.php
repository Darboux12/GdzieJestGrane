<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/general.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/topbar.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/popularEventsNav.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/ElementsStyle/chatbox.css">
    <link rel="Stylesheet" type="text/css" href="../../Public/CSS/PagesStyle/newspage.css">

    <script type="text/javascript" src="../../Public/JS/chatbox.js"></script>
    <script type="text/javascript" src="../../Public/JS/topbar.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>News Page</title>
</head>

<body>

<div class="Wrapper">

    <?php include(dirname(__DIR__) . '/Common/topbarStandard.php'); ?>

    <?php include(dirname(__DIR__) . '/Common/topbarMobile.php'); ?>

    <div class="NewsNav">

        <?php foreach($allNewses as $news): ?>

            <div class="News">

                <div class="Image">
                    <?= '<img src="data:image/jpeg;base64,'.base64_encode($news->getImage()) .'" />' ?>
                </div>

                <div class="NewsText">
                    <h><?= $news->getTitle()?></h>
                    <p><?= $news->getDescription()?></p><a href="#page"><?= $news->getLink()?></a>
                </div>

            </div>

        <?php endforeach ?>

    </div>

    <div class="RightNav">

        <h id="NavTitle">Ostatnio dodane aktualności</h>

        <?php foreach($latestNewses as $news): ?>

        <div class="PopularEvent">

            <?= '<img src="data:image/jpeg;base64,'.base64_encode($news->getImage()) .'" />' ?>

            <div class="NewsText">
                <h><?= $news->getTitle()?></h>
                <a href="#page">Dowiedz się więcej...</a>
            </div>

        </div>

        <?php endforeach ?>

    </div>

</div>

<?php include(dirname(__DIR__) . '/Common/chatbox.php'); ?>

</body>

</html>