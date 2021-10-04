<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
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
            <button type="button" class="form__btn nextBtn">следующий</button>
        </div>
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
    </form>
</main>
<script>
    const form = document.querySelector('.form');
    const formWrapper = document.querySelector('.form__wrapper');
    const customBtn = document.querySelector('.customBtn');
    const formCancel = document.querySelector('.formUploader__cancel');
    const imgUploader = document.querySelector('.imgUploader');
    const formImg = document.querySelector('.form__img');
    const formImgName = document.querySelector('.formUploader__fileName p');
    const doneBtn = document.querySelector('.doneBtn');
    const skipBtn = document.querySelector('.skipBtn');
    const nextBtn = document.querySelector('.nextBtn');
    let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    customBtn.addEventListener('click', function(){
        imgUploader.click();
    })
    formImg.addEventListener('click', function(){
        imgUploader.click();
    })
    imgUploader.addEventListener('change', function(){
        const formFile = this.files[0];
        if (formFile) {
            const reader = new FileReader();
            reader.onload = function(){
                let result = reader.result;
                formImg.src = result;
                formWrapper.classList.add('active');
                doneBtn.disabled = false;
                skipBtn.disabled = true;
            }
            formCancel.addEventListener('click', function(){
                formImg.src = "";
                formWrapper.classList.remove('active');
                doneBtn.disabled = true;
                skipBtn.disabled = false;
            })
            reader.readAsDataURL(formFile);
        }
        if (this.value) {
            let valueStore = this.value.match(regExp);
            formImgName.innerHTML = valueStore;
        }
    });

</script>