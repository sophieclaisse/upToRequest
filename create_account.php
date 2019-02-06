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
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=MedievalSharp" rel="stylesheet">
    <title>Create account</title>
</head>
<body>

<div id="body">

<h1 id="title_createAccount">Create account :</h1>

<form method="post" action="model/Create_user.php">

    <div>
    <label for="username_sub">Nickname:</label>
    <input type="text" class="input" name="username_sub"/>
    </div>

    <div>
    <label for="password_sub">Password:</label>
        <input type="password" class="input" name="password_sub"/>
    </div>

    <div>
        <button type="submit" name="btn_CreateAccount" class="button"> Press </button>
    </div>

</form>
</div>

</body>
</html>