<?php
use systeme\Application\Application as App;


?>
<!doctype html>
<html lang="en">
<!-- Mirrored from finapp.bragherstudio.com/view/app-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 14:04:14 GMT -->
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

<!-- loader -->
<div id="loader">
    <img src="<?= app::autre("assets/img/logo-icon.png") ?>" alt="icon" class="loading-icon">
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="pageTitle">
        <img src="<?= app::autre("assets/img/logo.png") ?>" alt="logo" class="logo">
    </div>
    <div class="right">
        <!--<a href="app-notifications.html" class="headerButton">
            <ion-icon class="icon" name="notifications-outline"></ion-icon>
            <span class="badge badge-danger">4</span>
        </a>-->
        <?php
        if(\systeme\Model\Utilisateur::session()){
            ?>
            <a href="logout" class="headerButton btn btn-primary">
                Deconnecter
            </a>
        <?php
        }
        ?>

    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">
        <div class="col-md-12" style="padding-top: 5px">
            <input type="hidden" id="latitude" name="latitude" >
            <input type="hidden" id="longitude" name="longitude">
            <?php
            if(isset($contenue)){
                echo $contenue;
            }
            ?>
        </div>
</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu" style="<?php
if(isset($active)){
    if($active==="login" or $active==="register"){
        echo "display:none";
    }
}
?>">
    <a href="/alerte" class="item <?php if(isset($active)){
        if($active==="alert"){
            echo "active";
        }
    } ?>">
        <div class="col">
            <ion-icon name="pie-chart-outline"></ion-icon>
            <h3><strong>ALERTES</strong></h3>
        </div>
    </a>

    <a href="contact" class="item  <?php if(isset($active)){
        if($active==="message"){
            echo "active";
        }
    } ?>">
        <div class="col">
            <ion-icon name="document-text-outline"></ion-icon>
            <h3><strong>Message</strong></h3>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->

<script type="text/javascript" src="<?=App::autre("assets/js/jquery.maskedinput-master/src/jquery.maskedinput.js")?>"></script>
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

</body>
</html>