<?php
/**
 * Created by PhpStorm.
 * User: cyriak
 * Date: 07/02/2019
 * Time: 20:03
 */

class affichage_controleur
{

    private $model;

    public function __construct()
    {

        $this->model = new affichage();

    }

    public function create_account()
    {
        // include "create_account.php";

        $new_account = $this->model->account();

    }
}