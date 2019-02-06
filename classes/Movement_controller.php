<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 15:40
 */


class Movement_controller
{
    private $modele;

    public function __construct()
    {
        $this->modele = new Movement();
    }

    public function movement_up()
    {
        $moveUp = $this->modele->move_up();
    }

    public function movement_down()
    {
        $moveDown = $this->modele->move_down();
    }

    public function movement_left()
    {
        $moveLeft = $this->modele->move_left();
    }

    public function movement_right()
    {
        $moveRight = $this->modele->move_right();
    }
}