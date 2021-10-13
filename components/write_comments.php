<?
    session_start();
    include_once('./db.php');
    setComments($_SESSION['username'], $_SESSION['photo'], $_POST['comments']);
?>