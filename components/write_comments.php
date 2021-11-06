<?
    ob_start();
    session_start();
    include_once('./db.php');
    $username = $_SESSION['username'];
    $photo = $_SESSION['photo'];
    $comments = $_POST['comments'];
    $time = date('Y-m-d H:i', time());
    setComments($username, $photo, $comments, $time);
    header("Location: ../?route=guest");
    ob_end_flush();
?>