<?
    ob_start();
    include_once('../functions.php');
    include_once('./db.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        userSign($_POST['login'], $_POST['pass']);
    } else{
        session_destroy();
    }
    header("location: ../?route=main");
    ob_end_flush();
?>