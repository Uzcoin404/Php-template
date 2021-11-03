<?
    ob_start();
    include_once('./db.php');
    editComment($_POST['id'], $_POST['comments']);
    header("Location: ../?route=guest");
    ob_end_flush();
?>