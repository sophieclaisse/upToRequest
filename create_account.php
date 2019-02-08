<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 16:38
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css" media="screen" title="no title" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=MedievalSharp" rel="stylesheet">
    <title>Create account</title>
</head>
<body>

    <div id="body">

        <h2>Create account : </h2>

            <form method="post" action="">

                <div>
                <label class="label">Nickname : </label>
                </div>

                <div>
                <input type="text" class="input" name="username_sub"/>
                </div>

                <div>
                <label class="label">Password : </label>
                </div>

                <div>
                    <input type="password" name="password_sub"/>
                </div>


                        <div class="avatar">

                        <input type="radio" id="value1" name="avatar" value="1"> <img src="img/chevalier.png" height="50px">
                        <input type="radio" id="value2" name="avatar" value="2"> <img src="img/hollow.png" height="50px">
                        <input type="radio" id="value3" name="avatar" value="3"> <img src="img/vampire.png" height="50px">
                        <input type="radio" id="value4" name="avatar" value="4"> <img src="img/cyriak.png" height="50px">

                        </div>


                <div>

                    <button type="submit" name="btn_CreateAccount" class="button"> Press </button>
                </div>

            </form>
    </div>

</body>
</html>

<?php



require "controleur/createAccount_controller.php";
require "model/Create_user.php";



if( isset($_POST['username_sub']) && isset($_POST['password_sub']) && isset($_POST['avatar'])) {



    $pseudo = (isset($_REQUEST['username_sub'])? $_REQUEST['username_sub']:null);
    $password = (isset($_REQUEST['password_sub'])? $_REQUEST['password_sub']:null);
    $avatar = (isset($_REQUEST['avatar'])? $_REQUEST['avatar']:null);



    $ctrl = new createAccount_controller();

    $ctrl->create_account($pseudo,$password,$avatar);
    header("Location:index.php");
}