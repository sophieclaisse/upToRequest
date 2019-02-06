<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 11:20
 */

class createAccount_controller
{
    private $model;

    public function __construct()
    {
        $this->model = new createaccount();
    }

    public function create_account()
    {
        $new_account = $this->model->create_account();
    }


}