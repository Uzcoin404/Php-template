<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Гостевая книга</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <?if ($_SESSION['username']):?>
    <form action="../components/write_comments.php" class="form" method="POST">
        <label class="form__label">
            <span class="form__text">Оставте отзыв</span>
            <textarea class="form__input" name="comments"></textarea>
        </label>
        <button class="form__btn">Отправить</button>
    </form>
    <?endif;?>
    <?
    include_once('./components/db.php');
    $comments = getComments();
    ?>
    <?foreach ($comments as $key => $comment):?>
    <div class="comments__item">
            <p class="comments__item-time">12:30</p>
            <section class="comments__body">
                <div class="comments__head">
                    <h2 class="comment__head-title"><?= $comment['username']?></h2>
                    <img src="<?= $_SESSION['photo']?>" alt="" class="comments__head-img" name="photo">
                </div>
                <p class="comments__body-descr"><?= $comment['comments']?></p>
                <?if ($_SESSION['username']):?>
                <div class="comments__footer">
                    <a href="#" id="editComment" class="comments__footer-link"><i class="fal fa-edit"></i></a>
                    <a href="#" id="deleteComment" class="comments__footer-link"><i class="fal fa-trash"></i></a>
                </div>
                <?endif;?>
            </section>
    </div>
    <?endforeach;?>
</main>