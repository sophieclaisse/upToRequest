<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 13:20
 */

class check_log_controleur
{

    private $model;

    public function __construct()
    {

        $this->model = new check_log();

    }

    public function log($pseudo,$password)
    {

        $check_log = $this->model->check($pseudo,$password);

    }


}