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
        $this->name = $_GET['name'];
        $this->life = 100;
        $this->attack = 25;
        $this->defense = 10;
        $this->skin = $_GET['skin'];
        $this->experience = 0;
    }

}