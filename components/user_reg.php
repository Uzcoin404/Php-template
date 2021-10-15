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
        $imgPath = "../img/avatar/qwe.png";
    }
    move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
    userReg($login, $name, $pass, $imgPath, date('m-d-Y H:i:s', time()));
    header("location: ../?route=login");
    ob_end_flush();
?>