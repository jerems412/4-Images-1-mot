<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>4 images 1 mot</title>
    <!-- links -->
    <link rel="icon" href="<?php echo $url; ?>public/icon.png" type="image/icon png">
    <link rel="stylesheet" href="<?php echo $url; ?>public/SpaceUser/css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>public/SpaceUser/css/fontawesome/css/all.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="part1">
                <div class="left">
                    <a href="<?php echo $url; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <span><?= $_SESSION['userConnect']['idLevel'] ?></span>
                </div>
                <div class="right">
                    <i class="fa-solid fa-coins"></i>&nbsp
                    <p id="bonus"><?= $_SESSION['userConnect']['bonus'] ?></p>
                </div>
            </div>
            <div class="part2">
                <div class="top">
                    <img src="<?php echo $url; ?>public/levels/<?= $_SESSION['userConnect']['level'] ?>/img1.jpg" alt="">
                    <img src="<?php echo $url; ?>public/levels/<?= $_SESSION['userConnect']['level'] ?>/img2.jpg" alt="">
                </div>
                <div class="bottom">
                    <img src="<?php echo $url; ?>public/levels/<?= $_SESSION['userConnect']['level'] ?>/img3.jpg" alt="">
                    <img src="<?php echo $url; ?>public/levels/<?= $_SESSION['userConnect']['level'] ?>/img4.jpg" alt="">
                </div>
            </div>
            <div class="part3">
                <?php for ($i=0; $i < strlen($_SESSION['userConnect']['mot']); $i++) { 
                ?>
                <button onclick="buttonPart3(this)" id="but<?= $i ?>"></button>
                <?php
                } 
                ?>
            </div>
            <div class="part4">
                <div class="left">
                    <?php 
                    $cpt = 0;
                    foreach ($_SESSION['wordRand'] as $value) {
                    $cpt++;
                    ?>
                    <button id="button<?= $cpt ?>" value="<?= $cpt ?>" onclick="buttonPart4(this,'<?= strlen($_SESSION['userConnect']['mot']) ?>','<?= $_SESSION['userConnect']['mot'] ?>')"><?= $value ?></button><?php if($cpt ==6){echo "<br>";} ?>
                    <?php
                    }
                    ?>
                </div>
                <div class="right">
                    <button onclick="bonus('<?= $_SESSION['userConnect']['mot'] ?>')">A <br><br> <span><i class="fa-solid fa-coins"></i> 60</span></button>
                </div>
            </div>
            <div class="part5">
                <button>Demandez a vos amis &nbsp<i class="fa-solid fa-lightbulb"></i></button>
            </div>
        </div>
    </div>
    <script src="<?php echo $url; ?>public/ajax/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $url; ?>public/ajax/all.js"></script>
    <?php require_once "src/ajax/next.php"; ?>
</body>

</html>