<?php
/**
 * p-paiement - client.php
 * Create by ALCINDOR LOSTHELVEN
 * Created on: 6/17/2020
 */
require "../../../vendor/autoload.php";
if(isset($_POST['inscription'])){
    $client=new \app\DefaultApp\Models\Client();
    $client->remplire($_POST);
    $date=trim(addslashes(intval($_POST['date'])));
    $mois=trim(addslashes(intval($_POST['mois'])));
    $annee=trim(addslashes(intval($_POST['annee'])));
    if($date>31 or $date<01){
        echo "Date Incorrect";
        return;
    }
    if($mois>12 or $mois<01){
        echo "Mois Incorrect";
        return;
    }
    if($annee<1900){
        echo "Année Incorect";
        return;
    }
    $dateNaissance="{$date}-{$mois}-{$annee}";
    $client->setDateNaissance($dateNaissance);
    $client->setPin($client->getPin());
    $m=$client->add();
    echo $m;
}

if(isset($_POST['sidentifier'])){
    $telephone=trim(addslashes($_POST['telephone']));
    $pin=trim(addslashes($_POST['pin']));
    $m=\app\DefaultApp\Models\Client::connecter($telephone,$pin);
    if($m=="ok"){
        echo $m;
    }else{
        echo "Pin ou Telephone incorrect";
    }

}