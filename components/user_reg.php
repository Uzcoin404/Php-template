<?
    include_once('./db.php');
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    userReg($login, $name, $pass, 'gfdgdf');
?>