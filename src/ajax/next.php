<?php

if(isset($_GET['idlevel'])){
    
    if ($_SESSION['userConnect']['mot'] == $_GET['idlevel']) {
        require_once "src/controller/SpaceUserController.php";
        $home1 = new SpaceUserController();
        $home1 ->updateUser($_SESSION['userConnect']['idUser'],$_SESSION['userConnect']['idLevel']);
        $_SESSION['userConnect'] = $home1 ->userExist2($_SESSION['userConnect']['name'],$_SESSION['userConnect']['password']);
        $_SESSION['nbConnect'] = 0;
    }
}

if(isset($_GET['idBonus'])){

    require_once "src/controller/SpaceUserController.php";
    $home1 = new SpaceUserController();
    $home1->updateUser1($_SESSION['userConnect']['idUser']);
}

?>