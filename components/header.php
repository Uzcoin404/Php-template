<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/style.css?v=<?= time()?>">
    <link rel="stylesheet" href="../style/media.css?v=<?= time()?>">
</head>
<body>
    <div class="wrap">
        <header class="header">
            <a href="/" class="logo" data-aos="fade-right" data-aos-duration="1000">Php WEBSITE</a>
            <div class="singIn" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
                <a href="./?route=login" class="singIn__link">Вход</a>
                <a href="./?route=registration" class="singIn__link">Регистрация</a>
            </div>
            <div class="user" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="800">
                <div class="user__profile">
                    <img src="/img/avatar/2.jpg" alt="" class="user__profile-img">
                    <h4 class="user__profile-name">Имя</h4>
                </div>
                <ul class="user__menu">
                    <li><a href="#" class="user__menu-link"><i class="far fa-external-link"></i>Выход</a></li>
                </ul>
            </div>
            <div class="rowResizer"><span></span></div>
        </header>
        <div class="mainBody">