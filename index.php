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
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>

    <div id="body">
        <form action="check_log.php" methode="post">

            <div class="label">
            <label for="username"> Pseudo : </label>
            </div>

            <div class="input">
            <input type="text" name="username" id="username">
            </div>

            <div class="label">
                <label for=""> Password : </label>
            </div>

            <div class="input">
                <input type="text" name="password">
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
