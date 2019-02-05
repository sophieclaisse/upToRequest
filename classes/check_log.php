<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 * Time: 16:30
 */

class check_log
{

    private $password;
    private $username;

    public function __construct()
    {
        $this->password = sha1($_POST['password']);
        $this->username = $_POST['username'];
    }

    public function check()
    {
        GLOBAL $conn;

        $sql = "SELECT ``,`` from `` WHERE '$this->username' = `` AND '$this->password' = ``";

        $dub = $conn->query($sql);

        $row = $dub->fetch_assoc();

        $username = $row['username'];
        $password = $row['password'];


        if ($username == $_POST['username'] && $password == sha1($_POST['password'])) {

            session_start();

            $_SESSION['username'] = $_POST['username'];

            header('Location:game.php');

        }

    }
}