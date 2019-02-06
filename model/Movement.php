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

        $this->x = rand(0 ,1200);

        $this->y = rand(0,600);


    }

    public function userPosition_random()
    {
        $this->x ;
        $this->y;
    }

    public function move_up()
    {
        $this->y = $this->y + 10 ;

    }
    public function move_down()
    {
        $this->y = $this->y -10 ;
    }
    public function move_left()
    {
        $this->x = $this->x - 10 ;
    }
    public function move_right()
    {
        $this->x = $this->x + 10 ;
    }
}


