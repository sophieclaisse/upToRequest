<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 11:33
 */


class Create_user
{
    protected $login ;
    protected $passwordUser;
    public $con;
    public $avatar;
    protected $db ;


    public function __construct()
    {
        $this->db;
        $this->login = $_POST['username_sub'];
        filter_var($this->login, FILTER_SANITIZE_STRING);
        $this->passwordUser = $_POST['password_sub'];
        filter_var($this->passwordUser, FILTER_SANITIZE_STRING);
        $this->avatar;


        $this->db = new mysqli("localhost","c2sophie","umecjkJ_GMVZ9","c2sophie");

        if ($this->db->connect_error) {

            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_error . ")" . $this->db->connect_error;

        }

    }

    public function create_account()
    {
        $R_sql = "INSERT INTO `personnnage` (`pseudo`,`password`,`avatar`) 
                VALUES (?,?,?)";


        $P_sql= $this->con->prepare($R_sql);


        $P_sql->bind_param('sss',$this->login,$this->passwordUser,$this->avatar);


        $P_sql->execute();


        $P_sql->close();


    }

}