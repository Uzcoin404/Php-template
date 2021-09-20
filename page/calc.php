<main class="main" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Калькулятор</h2></div>
        <p class="head__date">Сегодня 03 Март 2020 год</p>
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
<script>
    const calc = document.querySelector('.calc');
    const calcInput = document.querySelector('.calc__input input');
    const calcNumber = document.querySelectorAll('.calc__items');
    const calcChar = document.querySelectorAll('.calc__char');
    const calcEqual = document.querySelector('.calc__equal');
    const backspace = document.querySelector('.backspace');
    const calcDelete = document.querySelector('.delete');
    const calcMinimize = document.querySelector('.calc__minimize');
    const calcIcon = document.querySelector('#calc__icon');
    for (let i = 0; i < calcNumber.length; i++) {
        calcNumber[i].addEventListener('click', function(){
            calcInput.value += calcNumber[i].innerHTML;
        });
    }
    function calculatorEqual(){
        let endInput = calcInput.value.substr(calcInput.value.length-1);
        if (endInput == '+' || endInput == '-' || endInput == '*' || endInput == '/' || endInput == '%' || endInput == '.') {
            calcInput.value = "couldn't equal";
        }
        else if (calcInput.value == '') {
            calcInput = 'nothing is included';
        }
        else{
            calcInput.value = eval(calcInput.value);
        }
    }   
    calcEqual.addEventListener('click', function(){
        calculatorEqual();
    });
    backspace.addEventListener('click', function(){
        calcInput.value = calcInput.value.slice(0, -1);
    });
    calcDelete.addEventListener('click', function(){
        calcInput.value = "";
    });
    var x = 0, 
        y = 0, 
        mousedown = false; 

    calcIcon.addEventListener('mousedown', function (e) { 
        mousedown = true; 
        x = calc.offsetLeft - e.clientX; 
        y = calc.offsetTop - e.clientY - calc.clientHeight;
        this.classList.add('active');
    }, true); 
    document.addEventListener('mouseup', function (e) { 
        mousedown = false;
        calcIcon.classList.remove('active');
    }, true); 

    document.addEventListener('mousemove', function (e) { 
        if (mousedown) { 
            calc.style.left = e.clientX + x + 'px'; 
            calc.style.top = e.clientY + y + 'px'; 
        } 
    }, true); 

    document.addEventListener("keydown", function(event) {
        if (event.keyCode == 13) {
            calculatorEqual();
        }
        if (event.keyCode == 46) {
            calcInput.value = "";
        }
        if (event.keyCode == 8) {
            calcInput.value = calcInput.value.slice(0, -1);
        }
        if (event.keyCode == 107) {
            calcInput.value += '+';
        }
        if (event.keyCode == 109) {
            calcInput.value += '-';
        }
        if (event.keyCode == 106) {
            calcInput.value += '*';
        }
        if (event.keyCode == 111) {
            calcInput.value += '/';
        }
        if (event.keyCode == 96) {
            calcInput.value += '0';
        }
        if (event.keyCode == 97) {
            calcInput.value += '1';
        }
        if (event.keyCode == 98) {
            calcInput.value += '2';
        }
        if (event.keyCode == 99) {
            calcInput.value += '3';
        }
        if (event.keyCode == 100) {
            calcInput.value += '4';
        }
        if (event.keyCode == 101) {
            calcInput.value += '5';
        }
        if (event.keyCode == 102) {
            calcInput.value += '6';
        }
        if (event.keyCode == 103) {
            calcInput.value += '7';
        }
        if (event.keyCode == 104) {
            calcInput.value += '8';
        }
        if (event.keyCode == 105) {
            calcInput.value += '9';
        }
        if (event.keyCode == 110) {
            calcInput.value += '.';
        }
    });
</script>