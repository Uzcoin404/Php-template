<?
    session_start();
    include_once('./db.php');
    $username = $_SESSION['username'];
    $photo = $_SESSION['photo'];
    $comments = $_POST['comments'];
    $time = date('m-d H:i', time());
    setComments($username, $photo, $comments, $time);
?>