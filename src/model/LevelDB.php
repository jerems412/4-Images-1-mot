<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use User;
use Level;

class LevelDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout user
    public function addLevel($level1,$mot)
    {
        $level = new Level;
        $level -> setLevel($level1);
        $level -> setMot($mot);
        $this -> entityManager -> persist($level);
        $this -> entityManager -> flush();
    }

}


?>