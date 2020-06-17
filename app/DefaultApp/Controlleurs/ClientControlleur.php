<?php
/**
 * Created by PhpStorm.
 * User: alcin
 * Date: 3/30/2020
 * Time: 12:20 PM
 */

namespace app\DefaultApp\Controlleurs;


use app\DefaultApp\Models\Alert;
use systeme\Controlleur\Controlleur;
use systeme\Application\Application as App;

class ClientControlleur extends Controlleur
{
    protected $nom_template = "template_login";

    public function index()
    {
        $var['titre'] = "index";
        $var['active'] = "alert";

        if (!\systeme\Model\Utilisateur::session()) {
            App::redirection("se_connecter");
        }

        $alerte = new Alert();
        $listeAlerte = $alerte->findAll();
        $var['listeAlerte'] = $listeAlerte;
        $this->render("client/index", $var);
    }

    public function contact()
    {
        $var['titre'] = "index";
        $var['active'] = "message";

        $this->render("client/contact", $var);
    }


    public function seConnecter()
    {
        $var['titre'] = "Se connecter";
        $var['active'] = "login";

        $this->render("client/se_connecter", $var);
    }


    public function register()
    {
        $var['titre'] = "Inscription";
        $var['active'] = "register";
        $this->render("client/register", $var);
    }
}