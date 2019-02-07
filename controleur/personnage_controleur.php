<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 09:45
 */


class personnage_controleur
{
    private $model;

    public function __construct()
    {

        $this->model = new personnage();
        session_start();


    }

    public function UserCreate()
    {

        $UserCreate = $this->model->create();

    }

}