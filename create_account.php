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
<h1 id="title_createAccount">Create account :</h1>
<div id="form_account">
<form method="post" action="model/Create_user.php">
    <label for="username_sub">Nickname:</label>
    <input type="text" id="username_sub" name="username_sub"/>

    <label for="password_sub">Password:</label>
        <input type="password" id="password_sub" name="password_sub"/>


        <input type="submit" name="btn_CreateAccount" id="btn_CreateAccount"/>
</div>
</form>

</body>
</html>