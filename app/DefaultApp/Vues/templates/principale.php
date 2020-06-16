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
    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Total Balance</span>
                    <h1 class="total">$ 2,562.50</h1>
                </div>
                <div class="right">
                    <a href="#" class="button" data-toggle="modal" data-target="#depositActionSheet">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#depositActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#sendActionSheet">
                        <div class="icon-wrapper">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>Send</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <strong>Cards</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#sendActionSheet">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="swap-vertical"></ion-icon>
                        </div>
                        <strong>Exchange</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">From</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input1">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" value="100">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal">Deposit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet -->

    <!-- Send Action Sheet -->
    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2">From</label>
                                    <select class="form-control custom-select" id="account2">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11">To</label>
                                    <input type="email" class="form-control" id="text11"
                                           placeholder="Enter bank ID">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input14">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="0">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal">Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet -->

    <!-- my cards -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">My Cards</h2>
            <a href="app-cards.html" class="link">View All</a>
        </div>
        <div class="carousel-single owl-carousel owl-theme shadowfix">
            <div class="item">
                <!-- card block -->
                <div class="card-block bg-primary">
                    <div class="card-main">
                        <div class="card-button dropdown">
                            <button type="button" class="btn btn-link btn-icon" data-toggle="dropdown">
                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="close-outline"></ion-icon>
                                    Remove
                                </a>
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                    Upgrade
                                </a>
                            </div>
                        </div>
                        <div class="balance">
                            <span class="label">BALANCE</span>
                            <h1 class="title">$ 1,256,90</h1>
                        </div>
                        <div class="in">
                            <div class="card-number">
                                <span class="label">Card Number</span>
                                •••• 9905
                            </div>
                            <div class="bottom">
                                <div class="card-expiry">
                                    <span class="label">Expiry</span>
                                    12 / 25
                                </div>
                                <div class="card-ccv">
                                    <span class="label">CCV</span>
                                    553
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * card block -->
            </div>
            <div class="item">
                <!-- card block -->
                <div class="card-block bg-dark">
                    <div class="card-main">
                        <div class="card-button dropdown">
                            <button type="button" class="btn btn-link btn-icon" data-toggle="dropdown">
                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="close-outline"></ion-icon>
                                    Remove
                                </a>
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                    Upgrade
                                </a>
                            </div>
                        </div>
                        <div class="balance">
                            <span class="label">BALANCE</span>
                            <h1 class="title">$ 1,256,90</h1>
                        </div>
                        <div class="in">
                            <div class="card-number">
                                <span class="label">Card Number</span>
                                •••• 9905
                            </div>
                            <div class="bottom">
                                <div class="card-expiry">
                                    <span class="label">Expiry</span>
                                    12 / 25
                                </div>
                                <div class="card-ccv">
                                    <span class="label">CCV</span>
                                    553
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * card block -->
            </div>
            <div class="item">
                <!-- card block -->
                <div class="card-block bg-secondary">
                    <div class="card-main">
                        <div class="card-button dropdown">
                            <button type="button" class="btn btn-link btn-icon" data-toggle="dropdown">
                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                    Edit
                                </a>
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="close-outline"></ion-icon>
                                    Remove
                                </a>
                                <a class="dropdown-item" href="javacript:;">
                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                    Upgrade
                                </a>
                            </div>
                        </div>
                        <div class="balance">
                            <span class="label">BALANCE</span>
                            <h1 class="title">$ 1,256,90</h1>
                        </div>
                        <div class="in">
                            <div class="card-number">
                                <span class="label">Card Number</span>
                                •••• 9905
                            </div>
                            <div class="bottom">
                                <div class="card-expiry">
                                    <span class="label">Expiry</span>
                                    12 / 25
                                </div>
                                <div class="card-ccv">
                                    <span class="label">CCV</span>
                                    553
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * card block -->
            </div>
        </div>
    </div>
    <!-- * my cards -->

    <!-- app footer -->
    <div class="appFooter">
        <div class="footer-title">
            Copyright © Finapp 2020. All Rights Reserved.
        </div>
        Bootstrap 4 based mobile template.
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
                        <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong>Sebastian Doe</strong>
                        <div class="text-muted">4029209</div>
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
                <ul class="listview flush transparent no-line image-listview">
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
                </ul>
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
                        <a href="app-login.html" class="item">
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

                <!-- send money -->
                <div class="listview-title mt-1">Send Money</div>
                <ul class="listview image-listview flush transparent no-line">
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Artem Sazonov</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Sophie Asveld</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Kobus van de Vegte</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * send money -->

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

<!-- ///////////// Js Files ////////////////////  -->
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
<script>
    /* setTimeout(() => {
         notification('notification-example', 5000);
     }, 2000);*/
</script>
</body>
</html>