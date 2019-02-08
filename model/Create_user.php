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


    public function __construct()
    {


        $this->db = new mysqli("localhost","c2sophie","umecjkJ_GMVZ9","c2sophie");

        if ($this->db->connect_error) {

            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_error . ")" . $this->db->connect_error;

        }

    }

    public function account($login,$passwordUser,$avatar)
    {

        echo"test";
        $R_sql = "INSERT INTO `personnage` (`pseudo`,`id_avatar`,`password`) 
                VALUES (?,?,?)";



        $P_sql= $this->db->prepare($R_sql);


        // bug ici
        $P_sql->bind_param('sis', $login ,$avatar ,$passwordUser);




        $P_sql->execute();
        var_dump($P_sql);

        $P_sql->close();


    }

}