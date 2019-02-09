<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 15:48
 */
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/style2.css" media="screen" title="no title" charset="utf-8">
</head>

<body>

    <div id="body">
        <form action="" method="post">

            <div class="label">
            <label for="username"> Pseudo : </label>
            </div>

            <div class="input">
            <input type="text" name="username" id="username">
            </div>

            <div class="label">
                <label for="password"> Password : </label>
            </div>

            <div class="input">
                <input type="password" name="password" id="password">
            </div>


            <div id="button">
            <button type="submit"> press </button>
            </div>
        </form>

        <a href="create_account.php"> créer un compte </a>
    </div>

</body>
</html>


<?php

require "controleur/check_log_controleur.php";
require "model/check_log.php";



if( isset($_POST['username']) && isset($_POST['password'])) {



    $pseudo = (isset($_REQUEST['username'])? $_REQUEST['username']:null);
    $password = (isset($_REQUEST['password'])? $_REQUEST['password']:null);
    $password = sha1($password);



    $ctrl = new check_log_controleur();

    $ctrl->log($pseudo,$password);

}

if ($_SESSION['username'] != "")
{
    header('Location:start.php');
}
