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

        $this->db = new mysqli("localhost","c2sophie","umecjkJ_GMVZ9","c2sophie");

        if ($this->db->connect_errno) {

            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_errno . ")" . $this->db->connect_error;

        }


        $this->password = sha1($_POST['password']);
        $this->username = $_POST['username'];
    }

    public function check()
    {
        GLOBAL $conn;

        $sql = "SELECT `pseudo`,`password` from `personnage` WHERE '$this->username' = `pseudo` AND '$this->password' = `password`";

        $dub = $conn->query($sql);

        $row = $dub->fetch_assoc();

        $username = $row['pseudo'];
        $password = $row['password'];


        if ($username == $_POST['username'] && $password == sha1($_POST['password'])) {

            session_start();

            $_SESSION['username'] = $_POST['username'];

            header('Location:game.php');

        }

    }
}