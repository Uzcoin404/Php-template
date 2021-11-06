<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Калькулятор</h2></div>
        <p class="head__date">Сегодня <?= date("d-m-Y");?> год</p>
    </section>
    <form action="" class="form" method="post">
        <label class="form__label">
            <span class="form__text">Число 1</span>
            <input type="text" class="form__input" name="one" data-type="number">
        </label>
        <div class="form__mySelect">
            <div class="form__select">
                <div class="form__select-name">Выбирите знак</div>
                <div class="form__select-option">
                    
                </div>
            </div>
            <select name="symbol">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>

        <label class="form__label">
            <span class="form__text">Число 2</span>
            <input type="text" class="form__input" name="two" data-type="number"> 
        </label>
        <button class="form__btn">Посчитать</button>
    </form>
    <?
        $one = $_POST['one'];
        $two = $_POST['two'];
        $symbol = $_POST['symbol'];
        $answer = 0;
        if ($symbol == '+') {
            $answer = $one + $two;
        }
        else if ($symbol == '-') {
            $answer = $one - $two;
        }
        else if ($symbol == '*') {
            $answer = $one * $two;
        }
        else if ($symbol == '/') {
            $answer = $one / $two;
        }
        $result = '<div class="head__title__blog" style="margin: 30px 0; width: min-content"><h2 class="head__title">Answer: ' . $answer . '</h2></div>';
        echo $result;
    ?>
    <section class="body">
        <div class="calc" name="calc">
            <div class="calc__input">
                <input type="text" name="evalInput" readonly="">
            </div>
            <div class="calc__functions backspace"><i class="fas fa-backspace"></i></div>
            <div class="calc__functions delete">C</div>
            <div class="calc__numbers">
                <div class="calc__items calc__number">1</div>
                <div class="calc__items calc__number">2</div>
                <div class="calc__items calc__number">3</div>
                <div class="calc__items calc__number">4</div>
                <div class="calc__items calc__number">5</div>
                <div class="calc__items calc__number">6</div>
                <div class="calc__items calc__number">7</div>
                <div class="calc__items calc__number">8</div>
                <div class="calc__items calc__number">9</div>
                <div class="calc__items calc__number number0">0</div>
                <div class="calc__items calc__number">.</div>
            </div>
            <div class="calc__chars">
                <div class="calc__items calc__char">+</div>
                <div class="calc__items calc__char">-</div>
                <div class="calc__items calc__char">*</div>
                <div class="calc__items calc__char">/</div>
            </div>
            <div class="calc__footer calc__equal">=</div>
            <div class="calc__footer calc__items calc__char">%</div>
            <div class="calc__scroller">
                <p class="icon__tooltip">Siljitish uchun ushlab turib suring!</p>
                <i class="fas fa-calculator" id="calc__icon"></i>
            </div>
        </div>
    </section>
</main>
<script src="../js/calculate.js"></script>