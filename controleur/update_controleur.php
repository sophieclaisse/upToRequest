<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 16:39
 */

class update_controleur
{

    private $model;

    public function __construct()
    {

        $this->model = new update();

    }

    public function Userupdate()
    {

        $UserCreate = $this->model->update();

    }

}