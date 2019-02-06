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
    public $avatar;


    public function __construct()
    {
        $this->login = $_POST['username_sub'];
        $this->passwordUser = $_POST['password_sub'];
        $this->avatar;


       // $db = new check_con();
       // $this->con = $db->check();


    }

    public function create_user()
    {
        $R_sql = "INSERT INTO `personnnage` (`pseudo`,`password`,`avatar`) 
                VALUES (?,?,?)";


        $P_sql= $this->con->prepare($R_sql);


        $P_sql->bind_param('ssisss',$this->login,$this->passwordUser,$this->avatar);


        $P_sql->execute();


        $P_sql->close();


    }

}