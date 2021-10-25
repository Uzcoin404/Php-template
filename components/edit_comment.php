<?
    include_once('./db.php');
    $id = $_POST['id'];
    var_dump($id);
    $comments = $_POST['comments'];
    editComment(21, $comments);
?>