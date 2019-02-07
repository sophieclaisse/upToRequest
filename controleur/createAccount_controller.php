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

        $this->model = new Create_user();

    }

    public function create_account($pseudo,$password,$avatar)
    {
       // include "create_account.php";

        $new_account = $this->model->account($pseudo,$password,$avatar);

    }

}