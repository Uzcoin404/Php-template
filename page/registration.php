<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <?if($_GET['invalid']):?>
        <h1 class="invalid_indi">Username is already Registered</h1>
    <?endif;?>
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Регистрация в системе</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <form action="../components/user_reg.php" class="form" method="post" enctype="multipart/form-data">
        <div class="form__content">
            <label class="form__label">
                <span class="form__text">Логин</span>
                <input type="text" class="form__input" name="login" autocomplete="off" required>
            </label>
            <label class="form__label">
                <span class="form__text">Имя</span>
                <input type="text" class="form__input" name="name" autocomplete="off" required>
            </label>
            <label class="form__label">
                <span class="form__text">Пароль</span>
                <input type="password" class="form__input" name="pass" required>
                <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
            </label>
            <label class="form__label">
                <span class="form__text">Повторите пароль</span>
                <input type="password" class="form__input" name="confirmpass" required>
                <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
            </label>
            <span class="form__error">* Пароли не совподают</span>
            <button type="submit" class="form__btn nextBtn" disabled>Next</button>
            <div class="form__imgUploader">
                <div class="form__wrapper">
                    <div class="form__image">
                        <img src="" alt="" class="form__img">
                    </div>
                    <div class="formUploader__content">
                        <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                        <div class="formUploader__text">No photo Choosen, yet!</div>
                    </div>
                    <div class="formUploader__cancel"><i class="fas fa-times"></i></div>
                    <div class="formUploader__fileName"><p>file name</p></div>
                </div>
                <input type="file" class="imgUploader" accept=".jpg, .jpeg, .png" name="photo" hidden>
                <button type="button" class="customBtn">Choose a photo</button>
                <div class="form__buttons">
                    <button class="form__btn skipBtn" type="submit">Skip</button>
                    <button class="form__btn doneBtn" type="submit" disabled>Done</button>
                </div>
            </div>
        </div>
    </form>
</main>
<script src="../js/img-uploader.js?v=<?= time()?>"></script>