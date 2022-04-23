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
    <link rel="stylesheet" href="<?php echo $url; ?>public/Authentification/css/style.css">
</head>

<body>
    <div class="container">
        <div class="container">
            <form action="<?php echo $url; ?>Authentification/Sign_Up" method="post">
                <h1>Sign in</h1>
                <label for="">Username</label>
                <input type="text" name="username" minlength="5" placeholder="Enter your username." value="<?php if(isset($_SESSION['nameS'])){echo $_SESSION['nameS'];} ?>" required>
                <label for="">Password</label>
                <input type="password" name="password" minlength="5" placeholder="Enter your password." value="<?php if(isset($_SESSION['passwordS'])){echo $_SESSION['passwordS'];} ?>" >
                <input type="submit" value="Sign in">
                <a href="<?php echo $url; ?>Authentification/login">connect.</a>
                <?php if(isset($_SESSION['errorSignin'])){echo $_SESSION['errorSignin'];} ?>
            </form>
        </div>
    </div>
</body>

</html>