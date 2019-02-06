<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 11:33
 */


class Create_user
{
    private $login ;
    private $passwordUser;
    public $con;


    public function __construct()
    {
        $this->login = $_POST['username_sub'];
        $this->passwordUser = $_POST['password_sub'];
       // $db = new check_con();
       // $this->con = $db->check();


    }

    public function create_user()
    {
        $R_sql = "INSERT INTO `apprenants` (`nom`,`prenom`,`age`,`avatar`,`username`,`password`) 
                VALUES (?,?,?,?,?,?)";


        $P_sql= $this->con->prepare($R_sql);


        $P_sql->bind_param('ssisss',$this->lastName,$this->firstName,$this->age,$this->avatar,$this->login,$this->passwordUser);


        $P_sql->execute();




        $P_sql->close();


    }

}