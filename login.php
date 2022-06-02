<?php 

if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('./classes/databasehelper.class.php');
    include('./classes/login.class.php');
    include('./controllers/login.controller.php');

    $login = new LoginController($email, $password);
    $login->loginUser();

    header("location: ./index.php");
    exit;

}


?>