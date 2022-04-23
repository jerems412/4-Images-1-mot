<?php
use libs\system\Controller;
use src\model\UserDB;
use src\model\LevelDB;

require_once "libs/system/Controller.php";

class SpaceUserController extends Controller
{
    private $user;
    private $level;
    public function __construct() {
        parent::__construct();
        $this -> user = new UserDB();
        $this -> level = new LevelDB();
    }

    //page SpaceUser
    public function SpaceUser () {
        $_SESSION['nbConnect'] ++;
        if($_SESSION['nbConnect'] == 1){
            $_SESSION['wordRand'] = array();
            $tab = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
            for ($i=0; $i < strlen($_SESSION['userConnect']['mot']); $i++) { 
                array_push($_SESSION['wordRand'],$_SESSION['userConnect']['mot'][$i]);
            }
            $cpt = 12 - strlen($_SESSION['userConnect']['mot']);
            while($cpt != 0){
                array_push($_SESSION['wordRand'],$tab[rand(0,25)]);
                $cpt--;
            }
            shuffle($_SESSION['wordRand']);
        }
        return $this->view->load("SpaceUser/SpaceUser");
    }

    //update user
    public function updateUser($id,$level)
    {
        $this-> user -> updateUser($id,$level);
    }

    //update user
    public function updateUser1($id)
    {
        $this-> user -> updateUser1($id);
    }

    //user exist
    public function userExist2($name,$password)
    {
        return $this-> user -> userExist2($name,$password);
    }

}