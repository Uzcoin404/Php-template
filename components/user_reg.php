<?
    include_once('./db.php');
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $imgPath = "../img/avatar/$login.$ext";
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['photo']['tmp_name'], "../img/avatar/$login.$ext");
    userReg($login, $name, $pass, $imgPath);
    echo '<h1>Welcome '. $name . ' </h1>', '<p>Your Username '. $login . ' </p>', '<p>Your password '. $pass . ' </p>';
?>