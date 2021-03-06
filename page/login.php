<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <?if($_GET['invalid']):?>
        <h1 class="invalid_indi">Woops! Username or Password went Wrong</h1>
    <?endif;?>
    <section class="head">
    <div class="head__title__blog"><h2 class="head__title">Вход в систему</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <form action="../components/user_sign.php" class="form" method="post">
        <label class="form__label">
            <span class="form__text">Логин</span>
            <input type="text" class="form__input" name="login" value="<?$_COOKIE['username']?>">
        </label>
        <label class="form__label">
            <span class="form__text">Пароль</span>
            <input type="password" class="form__input" name="pass" value="<?$_COOKIE['password']?>">
            <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
        </label>
        <button class="form__btn">Вход</button>
    </form>
</main>