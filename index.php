<?php
//index 
session_start();
require_once "config/autoload.php";

use libs\system\Bootstrap;
$home = new Bootstrap();


/*$level = [
    'MATIN',
    'SOURIS',
    'CLÔTURE',
    'CROISEUR',
    'MELANGER',
    'GRILLER',
    'CORRIDOR',
    'CUBISTE',
    'ECHARPE',
    'VISSER',
    'MANAGER',
    'RUSE',
    'CYNIQUE',
    'SCIE',
    'PLEURER',
    'PYJAMAS',
    'PULL',
    'PETITS',
    'LANCER',
    'CRISTAUX',
    'SINUEUX',
    'COMPTE',
    'PLAFOND',
    'FOULES',
    'MOTEUR',
    'PARKING',
    'CYMBALES',
    'BRUT',
    'NEIGEUX',
    'CREDIT',
    'ENJOUE',
    'BORDURE',
    'EPINARDS',
    'TAXI',
    'POSTE',
    'LAITUE',
    'FROISSE',
    'CURRY',
    'CURSEUR',
    'CUTICULE',
    'CALINER',
    'ETAGERE',
    'CROUTONS',
    'CYBORG',
    'CROISER',
    'PLACARD',
    'VERANDA',
    'CROUPIER',
    'SABRE',
    'CYCLIQUE',
    'POIS',
    'CYCLISTE',
    'ESCALIER',
    'NUAGEUX',
    'PERMIS',
    'ORAGEUX',
    'HUMIDE',
    'BUS',
    'CHAUSSON',
    'MARRON',
    'FROISSER',
    'MAUVE',
    'CRAIE',
    'PRET',
    'CAPTEUR',
    'COULOIR',
    'PLUVIEUX',
    'PASSOIRE',
    'CIRE',
    'VENTEUX',
    'TAPIS',
    'EPARGNES',
    'CRISTAL',
    'CROISADE',
    'CAISSIER',
    'CLIENTE',
    'CYCLONE',
    'MICRO',
    'BATTRE',
    'MAUDIT',
    'BOUCLE',
    'RETRO',
    'BROCOLI',
    'PREMIER',
    'SUER',
    'CUBAIN',
    'CYCLISME',
    'FAUTE',
    'RAMPE',
    'CAROTTE',
    'GOMMER',
    'ARBALETE',
    'GANTS',
    'CANAPE',
    'BOL',
    'COUPABLE',
    'RIDEAUX',
    'CRYPTE',
    'GRIS',
    'REPAS',
    'SOUCOUPE',
    'CHANTEUR',
    'BIGOUDI'
];

require_once "src/controller/SpaceUserController.php";
$add = new SpaceUserController();

$cpt = 0;
foreach ($level as $value) {
    $cpt++;
    $niv = "public/levels/level_".$cpt;
    mkdir($niv);
    $add -> addLevel($niv,"img1.jpg","img2.jpg","img3.jpg","img4.jpg",$value);
}*/