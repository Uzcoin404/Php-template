<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Таблица умножения</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <form action="" class="form" method="post">
        <label class="form__label">
            <span class="form__text">Количество колонок</span>
            <input type="number" min="1" class="form__input" name="col">
        </label>
        <label class="form__label">
            <span class="form__text">Количество строк</span>
            <input type="number" min="1" class="form__input" name="row">
        </label>
        <button class="form__btn">Отправить</button>
    </form>
        <?
            $row = $_POST['row'];
            $col = $_POST['col'];
            if ($row == '' && $col == '' || $row <= 0 || $col <= 0) {
                echo "Qiymat kiritilmadi yoki no'tog'ri kiritilgan";
            }
            else{
                $result = '<div class="table">';
                for ($i=1; $i <= $row; $i++) { 
                    $result .= '<div class="table__row">';
                    for ($j=1; $j <= $col; $j++) { 
                        $result .= '<div class="table__col">' . $i * $j . '</div>';
                    }
                    $result .= '</div>';
                }
                $result .= '</div>';
                echo $result;
            }
        ?>  
   
</main>