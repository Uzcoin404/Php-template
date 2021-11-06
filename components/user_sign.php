<?
    ob_start();
    include_once('../functions.php');
    include_once('./db.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = userSign($_POST['login'], $_POST['pass']);
        if (!$user) {
            header("location: ../?route=login&invalid=true");
        } else {
            userSign($_POST['login'], $_POST['pass']);
            header("location: ../?route=main");
        }
    } else{
        session_destroy();
        header("location: ../?route=main");
    }
    ob_end_flush();
?>