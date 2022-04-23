<?php
use libs\system\Controller;
use src\model\UserDB;

require_once "libs/system/Controller.php";

class AuthentificationController extends Controller
{
    private $login;
    public function __construct() {
        parent::__construct();
        $this -> login = new UserDB();
    }

    //page login
    public function login () {
        $_SESSION['nameS'] ="";
        $_SESSION['passwordS'] ="";
        $_SESSION['errorSignin'] = "";
        return $this->view->load("Authentification/login");
    }

    //index s'inscrire
    public function Sign_In() {
        $_SESSION['name'] ="";
        $_SESSION['password'] ="";
        $_SESSION['errorLogin'] = "";
        return $this -> view -> load("Authentification/Sign_In");
    }

    //index s'inscrire
    public function sign_up() {
        extract($_POST);
        if($this -> login -> userExist1($username,$password))
        {
            $_SESSION['nameS'] = $username;
            $_SESSION['passwordS'] = $password;
            $_SESSION['errorSignin'] = '<label for="" style="color:red;"> User name already taked ! </label>';
            return $this -> Sign_In();
        }else
        {
            $_SESSION['nameS'] ="";
            $_SESSION['passwordS'] ="";
            $_SESSION['errorSignin'] = "";
            $this -> login -> addUser($username,$password);
            return $this -> login();
        }
    }

    //test login
    public function logon() {
        extract($_POST);
        if($this -> login -> userExist($username,$password))
        {
            $_SESSION['name'] ="";
            $_SESSION['password'] ="";
            $_SESSION['errorLogin'] = "";
            $_SESSION['userConnect'] = $this -> login -> userExist($username,$password);
            $_SESSION['nbConnect'] = 0;
            header("Location: http://localhost/mes_projets/4-images-1-mot/SpaceUser/SpaceUser");
        }else
        {
            $_SESSION['name'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['errorLogin'] = '<label for="" style="color:red;">! Incorrect user name or password </label>';
            return $this -> login();
        }
    }

    
}