<?
    include_once('./db.php');
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $imgPath = "../img/avatar/$login.$ext";
    move_uploaded_file($_FILES['photo']['tmp_name'], $imgPath);
    userReg($login, $name, $pass, $imgPath);
    header("location: /");
?>