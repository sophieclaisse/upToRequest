<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 14:20
 */

class Movement
{
    public $x ;
    public $y;

    public function __construct()
    {

        $this->x = rand(x ,y); //       /!\ X ET Y -> REMPLACER PAR DES VALEURS !!

        $this->y = rand(x,y); //       /!\ X ET Y -> REMPLACER PAR DES VALEURS !!


    }

    public function userPosition_random()
    {
        $this->x ;
        $this->y;
    }

    public function move_up()
    {
        $this->x = $this->x + 1 ;

    }
    public function move_down()
    {
        $this->y = $this->x -1 ;
    }
    public function move_left()
    {
        $this->y = $this->y - 1 ;
    }
    public function move_right()
    {
        $this->y = $this->y + 1 ;
    }
}


