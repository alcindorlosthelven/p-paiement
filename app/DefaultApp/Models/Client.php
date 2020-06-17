<?php
/**
 * p-paiement - Client.php
 * Create by ALCINDOR LOSTHELVEN
 * Created on: 6/17/2020
 */

namespace app\DefaultApp\Models;


use systeme\Model\Model;

class Client extends Model
{
    protected $table = "client";
    private $id, $telephone, $nom, $prenom, $date_naissance, $pin;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param mixed $pin
     */
    public function setPin($pin)
    {
        $this->pin = md5(sha1($pin));
    }

    private function existe($telephone)
    {
        $con = self::connection();
        $req = "select *from client where telephone=:telephone";
        $stmt = $con->prepare($req);
        $stmt->execute(array(
            ":telephone" => $telephone
        ));
        $rowcount = $stmt->rowCount();
        if ($rowcount > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add()
    {
        if ($this->existe($this->telephone)) {
            return "Compte existe sur le systeme.";
        }
        return parent::add(); // TODO: Change the autogenerated stub
    }

    public static function connecter($telephone, $pin)
    {
        try {
            $pin = md5(sha1($pin));
            $con = self::connection();
            $req = "select *from client where telephone=:telephone and pin=:pin";
            $stmt = $con->prepare($req);
            $stmt->execute(array(
                ":telephone" => $telephone,
                ":pin" => $pin
            ));

            $data = $stmt->fetchAll(\PDO::FETCH_CLASS, "app\\DefaultApp\\Models\\Client");
            if (count($data) > 0) {
                $_SESSION['utilisateur'] = $data[0]->getId();
                $_SESSION['pseudo'] = $data[0]->getNom() . " " . $data[0]->getPrenom();
                $_SESSION['role'] = 'client';
                $cookie_name = "conn";
                $cookie_value = 'oui';
                setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/", "", true, true); // 86400 = 1 day
                setcookie("id_user", $data[0]->getId(), time() + (86400 * 1000), '/'); // 86400 = 1 day
                setcookie("role", "client", time() + (86400 * 1000), '/'); // 86400 = 1 day
                return "ok";
            } else {
                return "no";
            }
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

    }

    public static function deconnecter()
    {
        if (isset($_SESSION['utilisateur'])) {
            $id = $_SESSION['utilisateur'];
            setcookie("conn", "", time() - 3600);
            session_destroy();
            return true;
        } else {
            return false;
        }
    }
}