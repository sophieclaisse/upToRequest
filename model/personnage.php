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
    private $position_X;
    private $position_Y;

    public function __construct()
    {

        $this->db = new mysqli("localhost","c2sophie","umecjkJ_GMVZ9","c2sophie");

        if ($this->db->connect_error) {

            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_error . ")" . $this->db->connect_error;

        }

        $this->name = $_GET['name'];
        filter_var($this->name, FILTER_SANITIZE_STRING);
        $this->life = 100;
        $this->attack = 25;
        $this->defense = 10;
        $this->skin = $_GET['skin'];
        filter_var($this->skin, FILTER_SANITIZE_STRING);
        $this->experience = 0;
        $this->position_X = rand(0,1200);
        $this->position_Y = rand(0,600);
    }

    public function create ()
    {

        $stmt = $this->db-> prepare("INSERT INTO `personnage-jeu`(`nom`,`vie`,`attaque`,`defense`,`skin`,`experience`,`position_x`,`position_y`) VALUE (?,?,?,?,?,?,?,?)");

        $stmt-> bind_param("siiisiii",$this->name,$this->life,$this->attack,$this->defense,$this->skin,$this->experience,$this->position_X,$this->position_Y);

        $stmt-> execute();

        $stmt -> close();
    }


}