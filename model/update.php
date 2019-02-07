<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 14:39
 */

class update extends personnage
{

    public function __construct()
    {
        parent::__construct();
    }

    public function attaque()
    {
        $this->attack = rand(11,25);
        return $this->attack;
    }

    public function duel()
    {
        $this->attaque();
        $this->life = $this->life - ($this->attack - $this->defense);
        return $this->life;
    }

    public function experience ()
    {

    }

    public function update()
    {

            $sql = "UPDATE personnage_jeu set vie= '$this->life', attaque= '$this->attack', experience= '$this->experience' where id_personnage= '$this->id'";
            $this->db->query($sql);


    }

}