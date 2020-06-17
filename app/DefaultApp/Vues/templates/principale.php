<?php
if(!\systeme\Model\Utilisateur::session()){
   \app\DefaultApp\DefaultApp::redirection("se_connecter");
}
use app\DefaultApp\DefaultApp as app;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if (isset($titre)) echo $titre; ?></title>
    <link rel="stylesheet" href="<?= app::autre("assets/css/style.css") ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <meta name="description" content="P-Paiement">
    <meta name="keywords" content="bootstrap, mobile template, cordova, phonegap, mobile, html, responsive"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= app::autre("assets/img/apple-touch-icon.png") ?>">
    <link rel="icon" type="image/png" href="<?= app::autre("assets/img/favicon.png") ?>" sizes="32x32">
    <link rel="shortcut icon" href="<?= app::autre("assets/img/favicon.png") ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<div id="loader">
    <img src="<?= app::autre("assets/img/logo-icon.png") ?>" alt="icon" class="loading-icon">
</div>
<body>
<!--ENTETE--->
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        <img src="<?= app::autre("assets/img/logo.png") ?>" alt="logo" class="logo">
    </div>
    <div class="right">
        <a href="app-notifications.html" class="headerButton">
            <ion-icon class="icon" name="notifications-outline"></ion-icon>
            <span class="badge badge-danger">4</span>
        </a>
        <a href="app-settings.html" class="headerButton">
            <img src="<?= app::autre("assets/img/sample/avatar/avatar1.jpg") ?>" alt="image" class="imaged w32">
            <span class="badge badge-danger">6</span>
        </a>
    </div>
</div>
<!-- * App Header -->
<!--FIN ENTETE-->

<!-- App Capsule -->
<div id="appCapsule">
    <?php
    if (isset($contenue)) {
        echo $contenue;
    }
    ?>
    <!-- app footer -->
    <div class="appFooter">
        <div class="footer-title">
            Copyright © SolutionIp All Rights Reserved.
        </div>
    </div>
    <!-- * app footer -->
</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="app-index.html" class="item active">
        <div class="col">
            <ion-icon name="arrow-down-outline"></ion-icon>
            <strong>Envoyer</strong>
        </div>
    </a>

    <a href="app-index.html" class="item">
        <div class="col">
            <ion-icon name="arrow-up-outline"></ion-icon>
            <strong>Recevoir</strong>
        </div>
    </a>


    <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
        <div class="col">
            <ion-icon name="menu-outline"></ion-icon>
            <strong>Menu</strong>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="<?= app::autre("assets/img/sample/avatar/avatar1.jpg") ?>" alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong><?= strtoupper(\systeme\Model\Utilisateur::pseudo()) ?></strong>
                        <div class="text-muted"><?= \systeme\Model\Utilisateur::role(); ?></div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->
                <!-- balance -->
                <div class="sidebar-balance">
                    <div class="listview-title">Balance</div>
                    <div class="in">
                        <h1 class="amount">$ 2,562.50</h1>
                    </div>
                </div>
                <!-- * balance -->

                <!-- action group -->
                <div class="action-group">
                    <a href="app-index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                            Deposit
                        </div>
                    </a>
                    <a href="app-index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            Withdraw
                        </div>
                    </a>
                    <a href="app-index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            Send
                        </div>
                    </a>
                    <a href="app-cards.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            My Cards
                        </div>
                    </a>
                </div>
                <!-- * action group -->

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <!--<ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="app-index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="pie-chart-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Overview
                                <span class="badge badge-primary">10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-pages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Pages
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-components.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="apps-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Components
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-cards.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <div class="in">
                                My Cards
                            </div>
                        </a>
                    </li>
                </ul>-->
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="component-messages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="logout" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * others -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->


<!-- notification example  -->
<div id="notification-example" class="notification-box">
    <div class="notification-dialog android-style">
        <div class="notification-header">
            <div class="in">
                <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="imaged w24 rounded">
                <strong>Olivia Evans</strong>
                <span>just now</span>
            </div>
            <a href="#" class="close-button">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="notification-content">
            <div class="in">
                <h3 class="subtitle">Payment Received</h3>
                <div class="text">
                    Olivia sent you $50 in your personal account.
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript"
        src="<?= App::autre("assets/js/jquery.maskedinput-master/src/jquery.maskedinput.js") ?>"></script>
<script>
    /*setTimeout(() => {
        notification('notification-example', 5000);
    }, 2000);*/
    $(".date").mask("99/99/9999");
    $(".cin").mask("99-99-99-9999-99-99999");
    $(".nif").mask("999-999-999-9");
    $(".telephone").mask("9999-99-99");
    $(".datetime").mask("9999-99-99 99:99:99");
    $(".pin6c").mask("999999");
    $(".mois").mask("99");
    $(".annee").mask("9999");
</script>

<!-- Jquery -->
<script src="<?= app::autre("assets/js/lib/jquery-3.4.1.min.js") ?>"></script>
<!-- Bootstrap-->
<script src="<?= app::autre("assets/js/lib/popper.min.js") ?>"></script>
<script src="<?= app::autre("assets/js/lib/bootstrap.min.js") ?>"></script>
<!-- Ionicons -->
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!--<script src="../../unpkg.com/ionicons%405.0.0/dist/ionicons.js"></script>-->
<!-- Owl Carousel -->
<script src="<?= app::autre("assets/js/plugins/owl-carousel/owl.carousel.min.js") ?>"></script>
<!-- Base Js File -->
<script src="<?= app::autre("assets/js/base.js") ?>"></script>
<script src="<?= app::autre("app.js") ?>"></script>

<script>
    /* setTimeout(() => {
         notification('notification-example', 5000);
     }, 2000);*/
</script>
</body>
</html>