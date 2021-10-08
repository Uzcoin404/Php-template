<?
    ob_start();
    include_once('../functions.php');
    include_once('./db.php');
    userSign($_POST['login'], $_POST['pass']);
    header("location: ../?route=main");
    var_dump($_SERVER);
    ob_end_flush();
?>