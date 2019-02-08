<?php
/**
 * Created by PhpStorm.
 * User: cyriak
 * Date: 07/02/2019
 * Time: 21:06
 */

session_start();

require "../controleur/personnage_controleur.php";
require "../model/personnage.php";

$ctrl = new personnage_controleur();

$ctrl->UserCreate();