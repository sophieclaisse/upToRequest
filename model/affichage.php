<?php
/**
 * Created by PhpStorm.
 * User: cyriak
 * Date: 07/02/2019
 * Time: 20:02
 */

class affichage
{

    public function __construct()
    {

        $this->db = new mysqli("localhost", "c2sophie", "umecjkJ_GMVZ9", "c2sophie");

        if ($this->db->connect_errno) {

            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_errno . ")" . $this->db->connect_error;

        }

    }

    function affichage()
    {


        $sql = "SELECT * FROM `personnage_jeu`";

        $result = $this->db->query($sql);

        $data =[];
        while ($row = $result->fetch_assoc()) {


            $data[]=$row;


        }
        json_encode($data);
    }
}