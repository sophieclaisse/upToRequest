<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 14:19
 */

class personnage
{
    protected $name;
    protected $life;
    protected $attack;
    protected $defense;
    protected $skin;
    protected $experience;

    public function __construct()
    {

        $this->db = new mysqli("localhost","c2sophie","umecjkJ_GMVZ9","c2sophie");

        if ($this->db->connect_errno) {

            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_errno . ")" . $this->db->connect_error;

        }

        $this->name = $_GET['name'];
        filter_var($this->name, FILTER_SANITIZE_STRING);
        $this->life = 100;
        $this->attack = 25;
        $this->defense = 10;
        $this->skin = $_GET['skin'];
        filter_var($this->skin, FILTER_SANITIZE_STRING);
        $this->experience = 0;
    }

    public function create ()
    {
        GLOBAL $conn;

        $stmt = $conn-> prepare("INSERT INTO ``(``,``,``,``,``,``) VALUE (?,?,?,?,?,?)");

        $stmt-> bind_param("siiisi",$this->name,$this->life,$this->attack,$this->defense,$this->skin,$this->experience);

        $stmt-> execute();

        $stmt -> close();
    }


}