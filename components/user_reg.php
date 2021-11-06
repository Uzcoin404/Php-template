<?
    ob_start();
    include_once('./db.php');
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    if ($ext) {
        $imgPath = "../img/avatar/$login.$ext";
    } else{
        $imgPath = "../img/avatar/noneAvatar.svg";
    }
    move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
    $users = checkUsername($login);
    if (!$users) {
        header("location: ../?route=registration&invalid=true");
    } else {
        userReg($login, $name, $pass, $imgPath, date('Y-m-d H:i:s', time()));
        header("location: ../?route=login");
    }
    ob_end_flush();
?>