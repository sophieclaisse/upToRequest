<?php
/**
 * Created by PhpStorm.
 * User: cyriak
 * Date: 07/02/2019
 * Time: 20:04
 */

require "../controleur/affichage.php";
require "../model/affichage.php";

$ctrl = new affichage_controleur();

$ctrl->UserCreate();
