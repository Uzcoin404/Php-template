<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Гостевая книга</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <?
        include_once('./components/db.php');
        $comments = getComments();
        $descr = getId($_GET['id'])['comments'];
    ?>
    <?if ($_SESSION['username']):?>
    <form action="<?= !$_GET['id'] ? '../components/write_comments.php' : '../components/edit_comment.php'?>" class="form" method="POST">
        <label class="form__label">
            <?if(!$_GET['id']):?>
            <span class="form__text">Оставте отзыв</span>
            <?endif;?>
            <textarea class="form__input" name="comments" value="<?$_GET['id']?>"></textarea>
        </label>
        <button class="form__btn" type="submit"><?= !$_GET['id'] ? 'Отправить' : 'Изменить'?></button>
        <? if($_GET['id']):?>
        <button class="form__btn">Назад</button>
        <?endif?>
    </form>
    <?endif;?>
    <? if(!$_GET['id']):?>
    <div class="comments">
        <?foreach ($comments as $key => $comment):?>
        <div class="comments__item">
                <p class="comments__item-time"><?=  $comment['time']?></p>
                <section class="comments__body">
                    <div class="comments__head">
                        <h2 class="comment__head-title"><?= $comment['username']?></h2>
                        <img src="<?= $comment['photo']?>" alt=""   class="comments__head-img" name="photo">
                    </div>
                    <p class="comments__body-descr"><?= $comment['comments']?></p>
                    <?if ($_SESSION['username'] == $comment['username']):?>
                    <div class="comments__footer">
                        <a href="./?route=guest&id=<?= $comment['id'];?>" id="editComment" class="comments__footer-link"><i class="fal fa-edit"></i></a>
                        <a href="route=guest" id="deleteComment"    class="comments__footer-link"><i class="fal fa-trash"></i></a>
                    </div>
                    <?endif;?>
                </section>
        </div>
        <?endforeach;?>
    </div>
    <?endif;?>
</main>