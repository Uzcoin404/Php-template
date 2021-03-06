<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Регистрация в системе</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <form action="../components/user_reg.php" class="form" method="post" enctype="multipart/form-data">
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
</div>
<script src="../js/img-uploader.js"></script>