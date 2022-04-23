<?php
namespace src\model;
use libs\system\Model;
require_once "libs/system/Model.php";
use User;
use Level;

class UserDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //ajout user
    public function addUser($name,$password)
    {
        $level = $this -> entityManager->getRepository(Level::class)->find(1);
        $user = new User;
        $user -> setName($name);
        $user -> setPassword(md5($password));
        $user -> setBonus(150);
        $user -> setLastWord("");
        $user -> setLastLevel($level);
        $this -> entityManager -> persist($user);
        $this -> entityManager -> flush();
    }

    //update user
    public function updateUser($id,$level)
    {
        $user = $this -> entityManager->getRepository(User::class)->find($id);
        $level = $this -> entityManager->getRepository(Level::class)->find($level+1);
        $user -> setBonus($user -> getBonus() + 14);
        $user -> setLastLevel($level);
        $this -> entityManager -> persist($user);
        $this -> entityManager -> flush();
    }

    //update user
    public function updateUser1($id)
    {
        $user = $this -> entityManager->getRepository(User::class)->find($id);
        $user -> setBonus($user -> getBonus() - 60);
        $this -> entityManager -> persist($user);
        $this -> entityManager -> flush();
    }

    //user exist
    public function userExist($name,$password)
    {
        $mdp = md5($password);
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT u.id idUser,u.name,u.password,u.lastLevel,u.bonus,u.lastWord,l.id idLevel,l.level,l.mot FROM users u, levels l WHERE u.lastLevel = l.id AND u.name=:idd AND u.password=:mdp';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$name, 'mdp' => $mdp]);
        $tab = $result -> fetchAllAssociative();
        if($tab)
        {
            return $tab[0];
        }else
        {
            return false;
        }
    }

    //user exist
    public function userExist2($name,$password)
    {
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT u.id idUser,u.name,u.password,u.lastLevel,u.bonus,u.lastWord,l.id idLevel,l.level,l.mot FROM users u, levels l WHERE u.lastLevel = l.id AND u.name=:idd AND u.password=:mdp';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$name, 'mdp' => $password]);
        $tab = $result -> fetchAllAssociative();
        if($tab)
        {
            return $tab[0];
        }else
        {
            return false;
        }
    }

    //user exist
    public function userExist1($name,$password)
    {
        $mdp = md5($password);
        $conn = $this -> entityManager -> getConnection();
        $sql = 'SELECT * FROM users WHERE name=:idd AND password=:mdp';
        $stmt = $conn -> prepare($sql);
        $result = $stmt -> executeQuery(['idd'=>$name, 'mdp' => $mdp]);
        $tab = $result -> fetchAllAssociative();
        if($tab)
        {
            return true;
        }else
        {
            return false;
        }
    }

}


?>